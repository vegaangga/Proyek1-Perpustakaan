<?php

use App\Http\Controllers\KatalogController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\TesController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('admin.dashboard');
});

// Route::get('/ubah', function () {
//     return view('admin.buku.ubah');
// });

Route::get('/buku/{nis}/edit', [TesController::class,'edit']);

Route::resource('anggota', AnggotaController::class);
Route::resource('buku', BukuController::class);
Route::resource('transaksi', TransaksiController::class);
Route::resource('admin', AdminController::class);
Route::prefix('siswa')->group(function () {
    Route::get('/{nis}', [SiswaController::class,'index']);
    Route::get('/edit', [SiswaController::class,'edit'])->name('siswa.edit');
    Route::get('/{nis}/katalog', [SiswaController::class,'katalog']);
    // Route::get('/tes', function() {
    //     return view('siswa.katalog.katalog');
    // });
});

// Route::resource('siswa/{nis}/katalog', KatalogController::class);



// Route::get('/siswa/{nis}', [SiswaController::class,'index']);

//Login
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
