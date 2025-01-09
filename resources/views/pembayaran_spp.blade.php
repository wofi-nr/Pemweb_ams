@extends('layouts.app')

@section('title', 'Input Pembayaran')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <h1 class="m-0">Pembayaran SPP</h1>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Pembayaran SPP</h3>
                </div>
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nisSiswa">NIS Siswa</label>
                            <input type="text" class="form-control" id="nisSiswa" placeholder="Masukkan NIS Siswa">
                        </div>
                        <div class="form-group">
                            <label for="namaSiswa">Nama Siswa</label>
                            <input type="text" class="form-control" id="namaSiswa" placeholder="Nama Siswa" disabled>
                        </div>
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <input type="text" class="form-control" id="kelas" placeholder="Kelas" disabled>
                        </div>
                        <div class="form-group">
                            <label for="bulan">Bulan</label>
                            <select class="form-control" id="bulan">
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
                        <div class="form-group">
                            <label for="namaSiswa">Nominal Pembayaran</label>
                            <input type="text" class="form-control" id="namaSiswa" placeholder="150.000" disabled>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Bayar</button>
                    </div>
                </form>
            </div>

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
                                <th>Kelas</th>
                                <th>Bulan</th>
                                <th>Jumlah</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>123456</td>
                                <td>Ahmad</td>
                                <td>X IPA 1</td>
                                <td>Januari</td>
                                <td>150,000</td>
                                <td>2025-01-03</td>
                            </tr>
                            <!-- Tambahkan data pembayaran lainnya di sini -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection