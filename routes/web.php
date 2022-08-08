<?php

use App\Http\Controllers\EskulController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LaporanPendaftaranController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('user.beranda');
});
Route::get('/', [App\Http\Controllers\UserController::class, 'jurusan']);

Route::get('/eskul', function () {
    return view('user.eskul');
});

Route::get('/eskul', [App\Http\Controllers\UserController::class, 'eskul']);

Route::get('/galeri', function () {
    return view('user.galeri');
});

Route::get('/galeri', [App\Http\Controllers\UserController::class, 'galeri']);

// Route::get('/user', function () {
//     return view('layouts.user');
// });

Route::get('/daftar', function () {
    return view('user.daftar');
});
Route::get('/daftar', [App\Http\Controllers\PendaftaranController::class, 'create2']);

Auth::routes(['register' => false]); // Mematikan halaman register

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::resource('eskul', EskulController::class);
    Route::resource('jurusan', JurusanController::class);
    Route::resource('galeri', GaleriController::class);
    Route::resource('pendaftaran', PendaftaranController::class);
    Route::resource('laporan_pendaftaran', LaporanPendaftaranController::class);

});
