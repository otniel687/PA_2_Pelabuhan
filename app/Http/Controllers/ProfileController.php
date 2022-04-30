<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['profiles'] = Profile::orderBy('id','desc')->paginate(5);
    
        return view('profiles.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profiles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image1' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'content1' => 'required',
            'image2' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'content2' => ''
        ]);
        $path1 = $request->file('image1')->store('public/images');
        $path2 = $request->file('image2')->store('public/images');
        if(empty($image2))
            return true;
            else 
            return false;
        $profile = new Profile();
        $profile->title = $request->title;
        $profile->content1 = $request->content1;
        $profile->content2 = $request->content2;
        $profile->image1 = $path1;
        $profile->image2 = $path2;
        $profile->save();
    
        return redirect()->route('profiles.index')
                        ->with('success','Post has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        return view('profiles.show',compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        return view('profiles.edit',compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'image1' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'content1' => 'required',
            'image2' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'content2' => ''
        ]);
        
        $profile = Profile::find($id);
        if($request->hasFile('image')){
            $request->validate([
              'image1' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $request->validate([
              'image2' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $path = $request->file('image')->store('public/images');
            $profile->image = $path;
        }
        $profile->title = $request->title;
        $profile->content1 = $request->content1;
        $profile->content2 = $request->content2;
        $profile->save();
    
        return redirect()->route('profiles.index')
                        ->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        $profile->delete();
    
        return redirect()->route('profiles.index')
                        ->with('success','profile has been deleted successfully');
    }
}
