<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataSiswa;
use Illuminate\Support\Facades\Hash;

class DataSiswaController extends Controller
{
    // Menampilkan form input data siswa
    public function create()
    {
        return view('data_siswa.create');
    }

    // Menyimpan data siswa ke database
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nis' => 'required|max:50',
            'username' => 'required|max:50',
            'password' => 'required|min:6',
            'nama_kelas' => 'required|max:20',
            'nama' => 'required|max:50',
            'alamat' => 'required|max:199',
            'tgl_lahir' => 'required|date',
        ]);

        // Membuat siswa baru
        $siswa = DataSiswa::create([
            'nis' => $validated['nis'],
            'username' => $validated['username'],
            'password' => Hash::make($validated['password']), // Enkripsi password
            'nama_kelas' => $validated['nama_kelas'],
            'nama' => $validated['nama'],
            'alamat' => $validated['alamat'],
            'tgl_lahir' => $validated['tgl_lahir'],
        ]);

        // Redirect atau response setelah sukses
        return redirect()->route('data_siswa.create')->with('success', 'Data Siswa berhasil disimpan');
    }
}
