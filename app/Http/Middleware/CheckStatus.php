<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CheckStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$statuss)
    {

        if(in_array($request->user()->status, $statuss)){
            return $next($request);
        }

        // if(Auth::user()->status == 'admin'){
        //     return Redirect::to('dashboard');
        // }

        // if(Auth::user()->status == 'petugas'){
        //     return Redirect::to('dashboard');
        // }

        // if(Auth::user()->status == 'pengguna'){
        //     return Redirect::to('dashboard');
        // }

        return redirect('/');



        // $status = array_slice(func_get_args(), 2);

        // foreach ($status as $role) {
        //     $user = Auth::User()->status;
        //     if( $user == $role){
        //         return $next($request);
        //     }
        // }

        // if(Auth::User()->status == 'admin'){
        //     return redirect('/admin');
        // }

        // // if (Auth::check() && Auth::user()->status == 'admin') {
        // //     return $next($request);
        // //     return redirect('/');
        // // }

        // // if (Auth::check() && Auth::user()->status == 'petugas') {
        // //     return $next($request);
        // // }

        // // if (Auth::check() && Auth::user()->status == 'pengguna') {
        // //     return $next($request);
        // // }

        // // return redirect('/');
    }
}
