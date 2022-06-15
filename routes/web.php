<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\LaporanController;


//login
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/aksi-login', [LoginController::class, 'aksiLogin'])->name('aksi-login');
Route::get('/dashboar/cari-lap-kerusakan/{unit}/{dari}/{sampai}', [LaporanController::class, 'cariKerusakan'])->name('cari-lap-kerusakan');
Route::get('/tampil_cetak_kerusakan_pdf/{unit}/{dari}/{sampai}', [LaporanController::class, 'cetakKerusakan'])->name('tampil_cetak_kerusakan_pdf');

// Route::group(['middleware' => 'SudahLogin'], function(){

    //logout
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    
    //dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // data user
    Route::get('/data-user', [UserController::class, 'index'])->name('data-user');
    Route::get('/tambah-data-user', [UserController::class, 'add'])->name('tambah-data-user');
    Route::post('/simpan-data-user', [UserController::class, 'store'])->name('simpan-data-user');
    Route::get('/edit-data-user/{id}', [UserController::class, 'edit'])->name('edit-data-user');
    Route::post('/update-data-user/{id}', [UserController::class, 'update'])->name('update-data-user');
    Route::get('/destroy-data-user/{id}', [UserController::class, 'destroy'])->name('destroy-data-user');

    //data unit
    Route::get('/data-reffuler', [UnitController::class, 'index'])->name('data-unit');
    Route::get('/tambah-data-reffuler', [UnitController::class, 'add'])->name('tambah-data-unit');
    Route::post('/simpan-data-reffuler', [UnitController::class, 'store'])->name('simpan-data-unit');
    Route::get('/edit-data-reffuler/{id}', [UnitController::class, 'edit'])->name('edit-data-unit');
    Route::post('/update-data-reffuler/{id}', [UnitController::class, 'update'])->name('update-data-unit');
    Route::get('/destroy-data-reffuler/{id}', [UnitController::class, 'destroy'])->name('destroy-data-unit');

    // lap Ceklis Reffuler
    Route::get('/data-ceklis', [LaporanController::class, 'index'])->name('data-ceklis');
    Route::get('/lap-ceklis', [LaporanController::class, 'LapCeklis'])->name('lap-ceklis');
    Route::get('/cari-lap-ceklis/{unit}/{dari}/{sampai}', [LaporanController::class, 'isidataTabel'])->name('cari-lap-ceklis');
    Route::get('/cetak-lap-ceklis/{id}', [LaporanController::class, 'cetakPDF'])->name('cetak-lap-ceklis');
    Route::get('/hapus-data-ceklis/{id}', [LaporanController::class, 'hapusCeklis'])->name('hapus-data-ceklis');

    // lap kerusakan
    Route::get('/lap-kerusakan', [LaporanController::class, 'lapKerusakan'])->name('lap-kerusakan');
    Route::get('/cari-lap-kerusakan/{unit}/{dari}/{sampai}', [LaporanController::class, 'cariKerusakan'])->name('cari-lap-kerusakan');
    Route::get('/tampil_cetak_kerusakan_pdf/{unit}/{dari}/{sampai}', [LaporanController::class, 'cetakKerusakan'])->name('tampil_cetak_kerusakan_pdf');
    
// });
