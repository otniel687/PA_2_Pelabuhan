<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PenumpangController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProfileController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return view('admin');
});

Route::get('/berita', [PenggunaController::class,'berita']);
Route::get('/pengumuman', [PenggunaController::class,'pengumuman']);
Route::get('/tentang', [PenggunaController::class,'tentang']);
Route::get('/jadwal', [PenggunaController::class,'jadwal']);
Route::get('/lokasi', [PenggunaController::class,'lokasi']);
Route::get('/galeri', [PenggunaController::class,'galeri']);
Route::get('/pesan', [PesanController::class,'index'])->name('pemesanan');
Route::post('/booking', [PesanController::class,'store']);

// Route::get('berita', 'InformasiController@index');

Route::resource('kendaraans', KendaraanController::class);
Route::resource('informasis', InformasiController::class);
Route::resource('beritas', BeritaController::class);
Route::resource('penumpangs', PenumpangController::class);
Route::resource('profiles', ProfileController::class);
