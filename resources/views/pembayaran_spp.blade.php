@extends('layouts.app')

@section('title', 'Pembayaran SPP')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <h1 class="m-0">Pembayaran SPP</h1>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <!-- Form Pembayaran -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Form Pembayaran SPP</h3>
            </div>
            <form action="{{ route('pembayaran_spp.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <!-- Input NIS -->
                    <div class="form-group">
                        <label for="nis">NIS Siswa</label>
                        <input type="text" class="form-control" id="nis" name="nis" placeholder="Masukkan NIS Siswa">
                    </div>
                    <!-- Input Nama Siswa -->
                    <div class="form-group">
                        <label for="namaSiswa">Nama Siswa</label>
                        <input type="text" class="form-control" id="namaSiswa" placeholder="Nama Siswa">
                    </div>
                    
                    <!-- Input Bulan -->
                    <div class="form-group">
                        <label for="bulan">Bulan</label>
                        <select class="form-control" id="bulan" name="bulan" required>
                            <option>Januari</option>
                            <option>Februari</option>
                            <option>Maret</option>
                            <option>April</option>
                            <option>Mei</option>
                            <option>Juni</option>
                            <option>Juli</option>
                            <option>Agustus</option>
                            <option>September</option>
                            <option>Oktober</option>
                            <option>November</option>
                            <option>Desember</option>
                        </select>
                    </div>
                    <!-- Input Nominal Pembayaran -->
                    <div class="form-group">
                        <label for="jumlah_bayar">Nominal Pembayaran</label>
                        <input type="number" class="form-control" id="jumlah_bayar" name="jumlah_bayar"
                            placeholder="Masukkan Nominal" required>
                    </div>
                </div>
                <!-- Tombol Bayar -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Bayar</button>
                </div>
            </form>
        </div>

        <!-- Tabel Riwayat Pembayaran -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Riwayat Pembayaran</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Bulan</th>
                            <th>Jumlah</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pembayaran as $key => $data)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $data->nis }}</td>
                                <td>{{ $data->nama ?? '-' }}</td> <!-- Ambil nama langsung dari kolom pembayaran -->
                                <td>{{ $data->bulan }}</td>
                                <td>Rp {{ number_format($data->jumlah_bayar, 0, ',', '.') }}</td>
                                <td>{{ \Carbon\Carbon::parse($data->tgl_bayar)->format('d-m-Y H:i') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection