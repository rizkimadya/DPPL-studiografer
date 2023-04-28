<?php

use App\Http\Controllers\AuthController;
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

Route::get('/pilihanregis', [AuthController::class, 'pilihanRegis'])->name('pilihan.regis');
Route::get('/regispengguna', [AuthController::class, 'regisPengguna'])->name('regis.pengguna');
Route::post('/regispengguna', [AuthController::class, 'regisPenggunaAuth'])->name('pengguna.auth');
Route::get('/regisfotografer', [AuthController::class, 'regisFotografer'])->name('regis.fotografer');
Route::post('/regisfotografer', [AuthController::class, 'regisFotograferAuth'])->name('fotografer.auth');

