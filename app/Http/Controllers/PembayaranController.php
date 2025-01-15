<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\DB;

class PembayaranController extends Controller
{
    public function index()
    {
        // Ambil semua data pembayaran
        $pembayaran = Pembayaran::orderBy('tgl_bayar', 'desc')->get();

        return view('pembayaran_spp', compact('pembayaran'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nis' => 'required|string|max:100|exists:data_siswa,nis', // Pastikan NIS ada di tabel data_siswa
            'bulan' => 'required|string|max:20',
            'jumlah_bayar' => 'required|numeric|min:1000', // Validasi jumlah minimal
        ]);

        // Ambil data siswa dari tabel `data_siswa` berdasarkan NIS
        $siswa = DB::table('data_siswa')->where('nis', $validatedData['nis'])->first();

        if (!$siswa) {
            return redirect()->back()->withErrors(['nis' => 'Data siswa tidak ditemukan.']);
        }

        // Simpan data pembayaran ke tabel `pembayaran`
        Pembayaran::create([
            'tahun_ajaran' => now()->year . '/' . (now()->year + 1),
            'nis' => $validatedData['nis'],
            'nama' => $siswa->nama, // Nama siswa dari tabel data_siswa
            'kelas' => $siswa->kelas, // Kelas siswa dari tabel data_siswa
            'bulan' => $validatedData['bulan'],
            'jumlah_bayar' => $validatedData['jumlah_bayar'],
            'tgl_bayar' => now(),
            'status_bayar' => 1,
        ]);

        return redirect()->route('pembayaran_spp')->with('success', 'Pembayaran berhasil disimpan.');
    }
}
