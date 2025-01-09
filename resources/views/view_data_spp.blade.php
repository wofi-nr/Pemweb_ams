@extends('layouts.app')

@section('title', 'View Pembayaran')

@section('content')
        <div class="content-header">
            <div class="container-fluid">
                <h1 class="m-0">View Data Pembayaran</h1>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Pembayaran SPP</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Filter Search -->
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <input type="text" id="searchNIS" class="form-control" placeholder="Cari berdasarkan NIS">
                            </div>
                            <div class="col-md-4">
                                <input type="text" id="searchKelas" class="form-control" placeholder="Cari berdasarkan Kelas">
                            </div>
                        </div>
                        <!-- Table -->
                        <table class="table table-bordered table-striped" id="dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIS</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Bulan</th>
                                    <th>Jumlah</th>
                                    <th>Tanggal Pembayaran</th>
                                    <th>Aksi</th>
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
                                    <td>
                                        <button class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Edit</button>
                                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</button>
                                    </td>
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