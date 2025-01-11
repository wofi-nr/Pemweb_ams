<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all(); // Mengambil semua data kelas
        return view('input_kelas', compact('kelas'));
    }

    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'nama_kelas' => 'required|unique:data_kelas,nama_kelas|max:20',
            'wali_kelas' => 'required|max:100',
            'biaya_spp'  => 'required|numeric|min:0',
        ]);

        // Menyimpan data kelas
        Kelas::create([
            'nama_kelas' => $request->nama_kelas,
            'wali_kelas' => $request->wali_kelas,
            'biaya_spp'  => $request->biaya_spp,
            'tgl_tambah' => now(),
        ]);

        // Redirect ke halaman input kelas dengan pesan sukses
        return redirect()->route('input_kelas')->with('success', 'Data kelas berhasil ditambahkan.');
    }
}
