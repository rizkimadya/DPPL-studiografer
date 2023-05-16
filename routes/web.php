<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FotograferController;
use App\Http\Controllers\PaketFotoController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\TransaksiController;
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

Route::get('/', [AuthController::class, 'home'])->name('home');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginAuth'])->name('login.auth');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/pilihanregis', [AuthController::class, 'pilihanRegis'])->name('pilihan.regis');
Route::get('/regispengguna', [AuthController::class, 'regisPengguna'])->name('regis.pengguna');
Route::post('/regispengguna', [AuthController::class, 'regisPenggunaAuth'])->name('pengguna.auth');
Route::get('/regisfotografer', [AuthController::class, 'regisFotografer'])->name('regis.fotografer');
Route::post('/regisfotografer', [AuthController::class, 'regisFotograferAuth'])->name('fotografer.auth');

// route admin
Route::group(['middleware' => ['auth', 'cekLevel:admin']], function () {
    Route::get('dashboard-admin', [AuthController::class, 'dashboard_admin'])->name('dashboard-admin');

    // paket foto
    Route::get('/datapaketfoto', [PaketFotoController::class, 'indexAdmin'])->name('datapaketfoto.index');

    // data fotografer
    Route::get('/datafotografer', [FotograferController::class, 'indexAdmin'])->name('datafotografer.index');
    Route::get('/datafotografer/show/{id}', [FotograferController::class, 'lihatAdmin']);
    Route::get('verifikasi_fotografer/{id}', [FotograferController::class, 'verifikasi_fotografer']);
    Route::delete('/datafotografer/{id}', [FotograferController::class, 'destroy']);

    // data pengguna
    Route::get('/datapengguna', [PenggunaController::class, 'indexAdmin'])->name('datapengguna.index');
    Route::get('/datapengguna/show/{id}', [PenggunaController::class, 'lihatAdmin']);
    Route::get('verifikasi_pengguna/{id}', [PenggunaController::class, 'verifikasi_pengguna']);
    Route::delete('/datapengguna/{id}', [PenggunaController::class, 'destroy']);

    // data transaksi
    Route::get('/datatransaksi', [TransaksiController::class, 'indexAdmin'])->name('datatransaksi.index');
});

//route fotografer
Route::group(['middleware' => ['auth', 'cekLevel:fotografer']], function () {
    Route::get('dashboard-fotografer', [AuthController::class, 'dashboard_fotografer'])->name('dashboard-fotografer');
});

//route user
Route::group(['middleware' => ['auth', 'cekLevel:pengguna']], function () {
    Route::get('halaman-user', [AuthController::class, 'halaman_user'])->name('halaman-user');

    // paket foto
    Route::get('paketfoto', [UserController::class, 'indexPaket'])->name('paketfoto.index');
    Route::get('paketfoto/detail/', [UserController::class, 'detailPaket'])->name('paketfoto.detail');

    // fotografer
    Route::get('fotografer', [UserController::class, 'indexFotografer'])->name('fotografer.index');
    Route::get('fotografer/detail/', [UserController::class, 'detailFotografer'])->name('fotografer.detail');

    // profile
    Route::get('transaksi', [UserController::class, 'indexTransaksi'])->name('transaksi.index');

    // profile
    Route::get('saya', [UserController::class, 'indexProfile'])->name('saya.index');
});
