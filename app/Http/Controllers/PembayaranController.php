<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;

class PembayaranController extends Controller
{
    public function index()
    {
        // Mendapatkan semua data pembayaran untuk riwayat
        $pembayaran = Pembayaran::all();

        return view('pembayaran.index', compact('pembayaran'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nis' => 'required|string|max:100',
            'bulan' => 'required|string|max:20',
            'jumlah_bayar' => 'required|numeric',
        ]);

        // Simpan data pembayaran
        Pembayaran::create([
            'tahun_ajaran' => now()->year . '/' . (now()->year + 1),
            'nis' => $validatedData['nis'],
            'bulan' => $validatedData['bulan'],
            'jumlah_bayar' => $validatedData['jumlah_bayar'],
            'tgl_bayar' => now(),
            'status_bayar' => 1,
        ]);

        return redirect()->route('pembayaran.index')->with('success', 'Pembayaran berhasil disimpan.');
    }
}
