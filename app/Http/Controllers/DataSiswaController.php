<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataSiswa;
use App\Models\Kelas;
use Illuminate\Support\Facades\Hash;

class DataSiswaController extends Controller
{
    // Menampilkan form input data siswa
    public function create()
    {
        $kelas = Kelas::all(); // Mengambil semua data kelas
        return view('input_siswa', compact('kelas'));
    }

    // Menyimpan data siswa
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nis' => 'required|max:50',
            'username' => 'required|max:50',
            'password' => 'required|min:6',
            'nama_kelas' => 'required|max:20',
            'nama' => 'required|max:50',
            'alamat' => 'required|max:199',
            'tgl_lahir' => 'required|date',
        ]);

        DataSiswa::create([
            'nis' => $validated['nis'],
            'username' => $validated['username'],
            'password' => Hash::make($validated['password']),
            'nama_kelas' => $validated['nama_kelas'],
            'nama' => $validated['nama'],
            'alamat' => $validated['alamat'],
            'tgl_lahir' => $validated['tgl_lahir'],
        ]);

        return redirect()->route('data_siswa.create')->with('success', 'Data Siswa berhasil disimpan');
    }
}
