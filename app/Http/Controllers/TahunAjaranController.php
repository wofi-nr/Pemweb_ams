<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TahunAjaran;

class TahunAjaranController extends Controller
{
    public function index()
    {
        // Mengambil data tahun ajaran dari database
        $tahunAjaranList = TahunAjaran::orderBy('id', 'desc')->get();

        // Menampilkan halaman pengaturan tahun ajaran dengan data yang diambil
        return view('setting_th_ajaran', compact('tahunAjaranList'));
    }

    public function store(Request $request)
    {
        // Validasi request
        $request->validate([
            'tahunAjaran' => 'required|string|max:10',
        ]);

        // Simpan data tahun ajaran baru ke database
        TahunAjaran::create([
            'tahun_ajaran' => $request->tahunAjaran,
            'status' => 0, // Atur status sesuai kebutuhan
            'tgl_tambah' => now(),
        ]);

        // Redirect kembali ke halaman dengan pesan sukses
        return redirect()->route('setting_th_ajaran')->with('success', 'Tahun ajaran berhasil ditambahkan');
    }

    public function destroy($id)
{
    // Hapus data berdasarkan ID
    TahunAjaran::destroy($id);

    // Redirect dengan pesan sukses
    return redirect()->route('setting_th_ajaran')->with('success', 'Tahun ajaran berhasil dihapus');
}

}
