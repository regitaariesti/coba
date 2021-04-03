<?php

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
    return view('welcome');
});

Route::resource('/anggota','\App\Http\Controllers\AnggotaController'); #route untuk anggota controller
Route::resource('/transaksi-simpanan','\App\Http\Controllers\TransaksiSimpananController');
Route::resource('/manajemen-bunga','\App\Http\Controllers\ManajemenBungaController');
Route::resource('/perhitungan-bunga','\App\Http\Controllers\PerhitunganBungaController');
Route::resource('/simpanan-bunga','\App\Http\Controllers\SimpananBungaController');