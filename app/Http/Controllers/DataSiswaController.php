<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataSiswa;
use App\Models\Kelas; // Pastikan model DataKelas digunakan
use Illuminate\Support\Facades\Hash;

class DataSiswaController extends Controller
{
    // Menampilkan halaman input data siswa
    public function index()
    {
        // Mengambil data kelas yang ada di database
        $kelas = Kelas::all(); // Mengambil semua data kelas

        // Kirim data_kelas ke view input_siswa
        return view('input_siswa', compact('kelas'));
    }

    // Menampilkan halaman untuk melihat data siswa
    public function view()
    {
        $siswa = DataSiswa::all(); // Mengambil semua data siswa
        return view('view_siswa', compact('siswa'));
    }

    // Menyimpan data siswa ke database
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'nis'        => 'required|max:50',
            'username'   => 'required|max:50',
            'password'   => 'required|min:6',
            'nama_kelas' => 'required|max:20',
            'nama'       => 'required|max:50',
            'alamat'     => 'required|max:199',
            'tgl_lahir'  => 'required|date',
        ]);

        // Menyimpan data siswa
        DataSiswa::create([
            'nis'        => $request->nis,
            'username'   => $request->username,
            'password'   => Hash::make($request->password), // Enkripsi password
            'nama_kelas' => $request->nama_kelas,
            'nama'       => $request->nama,
            'alamat'     => $request->alamat,
            'tgl_lahir'  => $request->tgl_lahir,
            'tgl_tambah' => now(),
        ]);

        // Redirect ke halaman input siswa dengan pesan sukses
        return redirect()->route('input_siswa')->with('success', 'Data siswa berhasil ditambahkan.');
    }
}
