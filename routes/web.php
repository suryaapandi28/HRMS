<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CutiIzinController;
use App\Http\Controllers\PenggajianController;
use App\Http\Controllers\DataPerusahaanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\KebijakanController;
use App\Http\Controllers\PinjamanController;
use App\Http\Controllers\RekrutmenController;




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
    return view('dashboard');
});

Route::resource('karyawan', KaryawanController::class);
route::get('/karyawan/create', function(){
    return view('karyawan.create');
})->name('karyawan.create');



Route::resource('cuti_izin', CutiIzinController::class);
Route::prefix('penggajian')->group(function () {
    Route::get('/periode', [PenggajianController::class, 'periode'])->name('penggajian.periode');
    Route::get('/komponen', [PenggajianController::class, 'komponen'])->name('penggajian.komponen');
    Route::get('/strukturGaji', [PenggajianController::class, 'strukturGaji'])->name('penggajian.strukturGaji');
    Route::get('/riwayatSlip', [PenggajianController::class, 'riwayatSlip'])->name('penggajian.riwayatSlip');
    Route::get('/insentif', [PenggajianController::class, 'insentif'])->name('penggajian.insentif');
    Route::get('/tarifUmum', [PenggajianController::class, 'tarifUmum'])->name('penggajian.tarifUmum');
    Route::get('/riwayatPajak', [PenggajianController::class, 'riwayatPajak'])->name('penggajian.riwayatPajak');
});

Route::resource('data_perusahaan', DataPerusahaanController::class);
Route::resource('kebijakan', KebijakanController::class);
Route::resource('pinjaman', PinjamanController::class);
Route::resource('rekrutmen', RekrutmenController::class);
