<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::view('/', 'dashboard');

/* PERKIRAAN */
Route::resource('perkiraan', App\Http\Controllers\PerkiraanController::class);

/* JURNAL UMUM */
Route::resource('jurnal_umum', App\Http\Controllers\JurnalUmumController::class);

/* JURNAL DETAIL */
Route::resource('jurnal_detail', App\Http\Controllers\JurnalDetailController::class);

/* BUKU BESAR */
Route::resource('buku_besar', App\Http\Controllers\BukuBesarController::class);

/* SALDO AKUN */
Route::resource('saldo_akun', App\Http\Controllers\SaldoAkunController::class);

/* PELANGGAN */
Route::resource('pelanggan', App\Http\Controllers\PelangganController::class);

/* PEMASOK */
Route::resource('pemasok', App\Http\Controllers\PemasokController::class);

/* FAKTUR PENJUALAN */
Route::resource('faktur_penjualan', App\Http\Controllers\FakturPenjualanController::class);

/* FAKTUR PEMBELIAN */
Route::resource('faktur_pembelian', App\Http\Controllers\FakturPembelianController::class);

/* PEMBAYARAN */
Route::resource('pembayaran', App\Http\Controllers\PembayaranController::class);

/* NERACA SALDO */
Route::resource('neraca_saldo', App\Http\Controllers\NeracaSaldoController::class);

/* LAPORAN KEUANGAN */
Route::resource('laporan_keuangan', App\Http\Controllers\LaporanKeuanganController::class);