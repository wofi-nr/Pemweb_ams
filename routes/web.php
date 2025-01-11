<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;


    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    // Route Halaman Input Kelas
    Route::get('/input-kelas', function () {
        return view('input_kelas');
    })->name('input_kelas');

    // Route Halaman View Kelas
    Route::get('/view-kelas', function () {
        return view('view_kelas');
    })->name('view_kelas');

    // Route Halaman Edit Data Kelas
    Route::get('/edit-data-kelas', function () {
        return view('edit_data_kelas');
    })->name('edit_data_kelas');

    // Route Halaman Input Siswa
    Route::get('/input-siswa', function () {
        return view('input_siswa');
    })->name('input_siswa');

    // Route Halaman View Data Siswa
    Route::get('/view-data-siswa', function () {
        return view('view_data_siswa');
    })->name('view_data_siswa');

    // Route Halaman Edit Data Siswa
    Route::get('/edit-data-siswa', function () {
        return view('edit_data_siswa');
    })->name('edit_data_siswa');

    // Route Halaman Pembayaran SPP
    Route::get('/pembayaran-spp', function () {
        return view('pembayaran_spp');
    })->name('pembayaran_spp');

    // Route Halaman View Data Pembayaran
    Route::get('/view-data-spp', function () {
        return view('view_data_spp');
    })->name('view_data_spp');

    // Route Halaman Setting Aplikasi
    Route::get('/setting-app', function () {
        return view('setting_app');
    })->name('setting_app');

    // Route Halaman Setting Tahun Ajaran
    Route::get('/setting-th-ajaran', function () {
        return view('setting_th_ajaran');
    })->name('setting_th_ajaran');


// Route KelasController
Route::post('/kelas/store', [KelasController::class, 'store'])->name('kelas.store');
Route::get('/input-kelas', [KelasController::class, 'index'])->name('input_kelas');
Route::get('/view-kelas', [KelasController::class, 'view'])->name('view_kelas');
