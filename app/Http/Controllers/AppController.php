<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use App\Models\Kendaraan;
use App\Models\Penumpang;
use App\Models\Profile;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function dashboard(){
        return view('home');
    }

    public function profil(){
        $data['profiles'] = Profile::orderBy('id','desc')->paginate(5);

        return view('profiles.index', $data);
    }

    public function kendaraan(){
        $data['kendaraans'] = Kendaraan::orderBy('id','desc')->paginate(5);

        return view('kendaraans.index', $data);
    }

    public function penumpang(){
        $data['penumpangs'] = Penumpang::orderBy('id','desc')->paginate(5);

        return view('penumpangs.index', $data);
    }

    public function informasi(){
        $data['informasis'] = Informasi::orderBy('id','desc')->paginate(5);

        return view('informasis.index', $data);
    }

    public function akun(){

    }

    public function galeri(){

    }

    public function link(){

    }

    public function backUp(){

    }
}
