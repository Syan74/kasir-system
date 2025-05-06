<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\TransaksiItemController;

Route::get('/', function () {
    //
});

Route::get('login', [AuthController::class, 'login'])->middleware(['guest']);
Route::post('login', [AuthController::class, 'loginProses'])->middleware(['guest']);
Route::post('logout', [AuthController::class, 'logout'])->middleware(['auth']);

Route::resource('user', UserController::class)->middleware(['auth']);
Route::resource('pelanggan', PelangganController::class)->middleware(['auth']);
Route::resource('kategori', KategoriController::class)->middleware(['auth']);
Route::resource('produk', ProdukController::class)->middleware(['auth']);
Route::resource('transaksi', TransaksiController::class)->middleware(['auth']);
Route::resource('transaksi-detail', TransaksiItemController::class)->middleware(['auth']);
Route::resource('pengaturan', PengaturanController::class)->middleware(['auth']);
