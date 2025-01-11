@extends('layouts.app')

@section('title', 'View Data Siswa')

@section('content')

        <div class="content-header">
            <div class="container-fluid">
                <h1 class="m-0">View Data Siswa</h1>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Siswa</h3>
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
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Siswa</th>
                                    <th>NIS</th>
                                    <th>Kelas</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Ahmad</td>
                                    <td>123456</td>
                                    <td>VII IPA 1</td>
                                    <td>Jl. Merpati No. 2</td>
                                    <td>
                                        <button class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Edit</button>
                                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Siti</td>
                                    <td>654321</td>
                                    <td>VI IPA 2</td>
                                    <td>Jl. Kenari No. 5</td>
                                    <td>
                                        <button class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Edit</button>
                                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</button>
                                    </td>
                                </tr>
                                <!-- Tambahkan data siswa lainnya di sini -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection