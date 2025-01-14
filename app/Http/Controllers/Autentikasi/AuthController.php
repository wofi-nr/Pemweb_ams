<?php

namespace App\Http\Controllers\Autentikasi;


use App\Http\Controllers\Controller;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller {

    public function login() {
        $data = [
            'menu'    => 'kelas',
            'submenu' => 'inputkelas',
        ];
        return view('auth_login', compact('data'));
    }


    public function getMlebu(Request $request) {
        // Aturan nggoo validasi, atur dewek sesukamu
        $aturane = [
            'username' => 'required|max:50',
            'password' => 'required|min:6|max:199',
        ];

        // Pesane manual anu, sesuaikan kambi $aturane nek arep nambahi
        $pesane = [
            'username.required' => 'Username wajib di iseni.',
            'username.max'      => 'Username maksimal 50 karakter.',
            'password.required' => 'Password wajib di iseni.',
            'password.min'      => 'Password minimal 8 karakter.',
            'password.max'      => 'Password maksimal 199 karakter.',
        ];

        // Ngecek Validasi
        $validasi = Validator::make($request->all(), $aturane, $pesane);
        // Gagal pas validasi
        if ($validasi->fails()) {
            // Mbalik ming halaman login nganggo pesan error
            return redirect()->back()->withErrors($validasi)->withInput();
        }

        // Aku jikot data langsung kan DB ura nganggo Model, berdasarkan username terdaftar
        $dataSiswa = DB::table('data_siswa')->where('username', $request->username)->first();

        // Tek priksa username ana ura nek langka mbalik maning anggo pesan
        if (!$dataSiswa) {
            return redirect()->back()->withErrors(['username' => 'Username tidak ditemukan.'])->withInput();
        }

        // Lanjut anu ketemu username me, password enkripsine kan inputan kambi kan DB tek has cocok apa ora.
        if (!Hash::check($request->password, $dataSiswa->password)) {
            // Mbalik ming halaman login maning anu password salah sih, nganggo pesan error salah
            return redirect()->back()->withErrors(['password' => 'Password salah.'])->withInput();
        }

        // Nah kie validasi karo has sandi ya bener dadi tek simpan nang sesi aplikasi, nggo kebutuhan validasi halaman
        // liane sing butuh login.
        // Kie helper nggo nyimpen satatus true kambi datane sisan, fungsine nang : app/Helpers/AMSHelpers.php
        loginSukses($dataSiswa);

        // Wis tek sismpen nang sesi wes aman nggo tanda login sukses, karena wes bener mangkat lah ming halaman home
        return redirect()->route('dashboard');
    }

    public function getMetu() {
        logout();
        return redirect()->route('auth');
    }


}