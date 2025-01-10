// app/Http/Controllers/TahunAjaranController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TahunAjaran;

class TahunAjaranController extends Controller
{
    public function index()
    {
        // Menampilkan halaman pengaturan tahun ajaran
        return view('tahun-ajaran.index');
    }

    public function store(Request $request)
    {
        // Validasi request
        $request->validate([
            'tahunAjaran' => 'required|string|max:10',
        ]);

        // Simpan data tahun ajaran baru ke database
        $tahunAjaran = TahunAjaran::create([
            'tahun_ajaran' => $request->tahunAjaran,
            'status' => 0, // Atur status sesuai kebutuhan
            'tgl_tambah' => now(), // Atau gunakan current_timestamp()
        ]);

        // Redirect atau berikan response sesuai kebutuhan
        return redirect()->back()->with('success', 'Tahun ajaran berhasil ditambahkan');
    }
}
