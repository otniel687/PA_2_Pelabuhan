<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PenumpangController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\CheckStatus;

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

//login
Route::get('/login', [LoginController::class, 'showLoginForm']);
Route::get('/login', function(){
    return view('auth.login');
})->name('login');

// Route::get('berita', 'InformasiController@index');

Route::resource('kendaraans', KendaraanController::class);
Route::resource('informasis', InformasiController::class);
Route::resource('beritas', BeritaController::class);
Route::resource('penumpangs', PenumpangController::class);
Route::resource('profiles', ProfileController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'checkStatus:admin']], function(){
    route::get('/dashboard', [AppController::class, 'dashboard'])->name('dashboard');
    route::get('/profil', [AppController::class, 'profil'])->name('profil');
    route::get('/kendaraan', [AppController::class, 'kendaraan'])->name('kendaraan');
    route::get('/penumpang', [AppController::class, 'penumpang'])->name('penumpang');
    route::get('/informasi', [AppController::class, 'informasi'])->name('informasi');
});

Route::group(['middleware' => ['auth', 'checkStatus:petugas']], function(){
    route::get('/dashboard', [AppController::class, 'dashboard'])->name('dashboard');
    route::get('/profil', [AppController::class, 'profil'])->name('profil');
    route::get('/kendaraan', [AppController::class, 'kendaraan'])->name('kendaraan');
    route::get('/penumpang', [AppController::class, 'penumpang'])->name('penumpang');
});

Route::group(['middleware' => ['auth', 'checkStatus:admin,pengguna']], function(){
    route::get('/dashboard', [AppController::class, 'dashboard'])->name('dashboard');
    route::get('/profil', [AppController::class, 'profil'])->name('profil');
});
