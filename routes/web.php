<?php

use App\Http\Controllers\Autentikasi\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataSiswaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\TahunAjaranController;

// Route nggo logine
Route::get('/auth', [AuthController::class, 'login'])->name('auth');            // Halaman login
Route::get('/logout', [AuthController::class, 'getMetu'])->name('get-metu');  // Validasi logout
Route::post('/login', [AuthController::class, 'getMlebu'])->name('get-login');  // Validasi login

Route::group(['middleware' => 'wis_login_urung_kie_nek_urung_ya_aja_akses_sing_routing_nang_jero_kene'], function () {
    // Route Dashboard
    Route::get('/', function () { return view('dashboard'); })->name('dashboard');
    // Route Siswa
    Route::get('/input-siswa', [DataSiswaController::class, 'index'])->name('input_siswa');
    Route::post('/data-siswa/store', [DataSiswaController::class, 'store'])->name('data_siswa.store');

    Route::get('/setting-th-ajaran', [TahunAjaranController::class, 'index'])->name('setting_th_ajaran');
    Route::post('/setting-th-ajaran/store', [TahunAjaranController::class, 'store'])->name('setting_th_ajaran.store');
    Route::delete('/setting-th-ajaran/delete/{id}', [TahunAjaranController::class, 'destroy'])->name('setting_th_ajaran.delete');

});

// Route Kelas
Route::get('/input-kelas', [KelasController::class, 'index'])->name('input_kelas'); // Halaman Input Kelas
Route::get('/view-kelas', [KelasController::class, 'view'])->name('view_kelas'); // Halaman View Data Kelas
Route::post('/kelas/store', [KelasController::class, 'store'])->name('kelas.store'); // Proses Simpan Data Kelas

// Route Siswa
Route::get('/input-siswa', [DataSiswaController::class, 'index'])->name('input_siswa');
Route::post('/data-siswa/store', [DataSiswaController::class, 'store'])->name('data_siswa.store');

// Route Pembayaran SPP
Route::get('/pembayaran-spp', [PembayaranController::class, 'index'])->name('pembayaran_spp');
Route::post('/pembayaran/store', [PembayaranController::class, 'store'])->name('pembayaran_spp.store');

// Route Setting
Route::get('/setting-app', function () {
    return view('setting_app');
})->name('setting_app'); // Halaman Setting Aplikasi
