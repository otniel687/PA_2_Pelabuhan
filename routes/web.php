<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PenumpangController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GaleriController;



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

Route::get('/berita', [PenggunaController::class,'berita']);
Route::get('/pengumuman', [PenggunaController::class,'pengumuman']);
Route::get('/tentang', [PenggunaController::class,'tentang']);
Route::get('/jadwal', [PenggunaController::class,'jadwal']);
Route::get('/lokasi', [PenggunaController::class,'lokasi']);
Route::get('/galeri', [PenggunaController::class,'galeri']);
Route::get('/tabel', [PenggunaController::class,'tabel']);
Route::get('/isi', [PenggunaController::class,'isi']);
Route::get('/pesan', [PesanController::class,'index'])->name('pemesanan');
Route::post('/booking', [PesanController::class,'store']);
Route::get('login', 'App\Http\Controllers\AuthController@index')->name('login');
Route::get('register', 'App\Http\Controllers\AuthController@register')->name('register');
Route::post('simpanregister', 'App\Http\Controllers\AuthController@simpanregister')->name('simpanregister');
Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

// Route::get('berita', 'InformasiController@index');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::get('/admin', function () {
            return view('admin');
        });
        Route::resource('penumpangs', PenumpangController::class);
        Route::resource('profiles', ProfileController::class);
        Route::resource('galeris', GaleriController::class);
        Route::resource('kendaraans', KendaraanController::class);
        Route::resource('informasis', InformasiController::class);
        Route::resource('beritas', BeritaController::class);
    });
    Route::group(['middleware' => ['cek_login:pelanggan']], function () {

    });
    Route::group(['middleware' => ['cek_login:mekanik']], function () {
        
    });
});




