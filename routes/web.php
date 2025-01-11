<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;

// Dashboard
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

// Route Kelas
Route::get('/input-kelas', [KelasController::class, 'index'])->name('input_kelas'); // Halaman Input Kelas
Route::get('/view-kelas', [KelasController::class, 'view'])->name('view_kelas'); // Halaman View Data Kelas
Route::post('/kelas/store', [KelasController::class, 'store'])->name('kelas.store'); // Proses Simpan Data Kelas

// Route Siswa
Route::get('/input-siswa', function () {
    return view('input_siswa');
})->name('input_siswa'); // Halaman Input Siswa

Route::get('/view-data-siswa', function () {
    return view('view_data_siswa');
})->name('view_data_siswa'); // Halaman View Data Siswa

Route::get('/edit-data-siswa/{id}', function ($id) {
    return view('edit_data_siswa', ['id' => $id]);
})->name('edit_data_siswa'); // Halaman Edit Data Siswa

// Route Pembayaran SPP
Route::get('/pembayaran-spp', function () {
    return view('pembayaran_spp');
})->name('pembayaran_spp'); // Halaman Pembayaran SPP

Route::get('/view-data-spp', function () {
    return view('view_data_spp');
})->name('view_data_spp'); // Halaman View Data Pembayaran

// Route Setting
Route::get('/setting-app', function () {
    return view('setting_app');
})->name('setting_app'); // Halaman Setting Aplikasi

Route::get('/setting-th-ajaran', function () {
    return view('setting_th_ajaran');
})->name('setting_th_ajaran'); // Halaman Setting Tahun Ajaran
