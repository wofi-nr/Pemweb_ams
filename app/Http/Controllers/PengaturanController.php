<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaturan;

class PengaturanController extends Controller
{
    public function index()
    {
        // Ambil nilai pengaturan dari database
        $namaSekolah = Pengaturan::getValue('nama_sekolah');
        $alamatSekolah = Pengaturan::getValue('alamat_sekolah');
        $temaAplikasi = Pengaturan::getValue('tema_aplikasi');

        // Tampilkan view dengan data pengaturan
        return view('setting-app.index', compact('namaSekolah', 'alamatSekolah', 'temaAplikasi'));
    }

    public function update(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_sekolah' => 'required|string|max:100',
            'alamat_sekolah' => 'required|string|max:199',
            'tema_aplikasi' => 'required|in:default,dark,light',
        ]);

        // Simpan data ke database
        Pengaturan::setValue('nama_sekolah', $request->nama_sekolah);
        Pengaturan::setValue('alamat_sekolah', $request->alamat_sekolah);
        Pengaturan::setValue('tema_aplikasi', $request->tema_aplikasi);

        // Redirect kembali ke halaman dengan pesan sukses
        return redirect()->route('setting-app.index')->with('success', 'Pengaturan berhasil disimpan.');
    }
}
