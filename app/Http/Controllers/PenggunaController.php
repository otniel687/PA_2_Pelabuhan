<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function berita()
    {
        return view('content.berita');
    }

    public function pengumuman()
    {
        return view('content.pengumuman');
    }

    public function tentang()
    {
        return view('content.tentang');
    }
    
    public function lokasi()
    {
        return view('content.lokasi');
    }
    
    public function jadwal()
    {
        return view('content.jadwal');
    }

    public function galeri()
    {
        return view('content.galeri');
    }
}
