@extends('layouts.app')

@section('title', 'View Pembayaran')

@section('content')
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="#" class="brand-link">
            <img src="https://via.placeholder.com/150" alt="Logo" class="brand-image img-circle elevation-3">
            <span class="brand-text font-weight-light">AMS Admin</span>
        </a>
        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="dashboard.html" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <i class="nav-icon fas fa-school"></i>
                            <p>
                                Data Kelas
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="input_kelas.html" class="nav-link ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Input Kelas</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="view_kelas.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View Data Kelas</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <i class="nav-icon fas fa-user-graduate"></i>
                            <p>
                                Data Siswa
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="input_siswa.html" class="nav-link ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Input Siswa</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="view_siswa.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View Data Siswa</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link active ">
                            <i class="nav-icon fas fa-money-bill-wave"></i>
                            <p>
                                Pembayaran
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pembayaran_spp.html" class="nav-link ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Pembayaran SPP</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="view_data_spp.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View Data Pembayaran</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                
                    <li class="nav-item">
                        <a href="setting_app.html" class="nav-link">
                            <i class="nav-icon fas fa-cogs"></i>
                            <p>Setting</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <!-- Content Wrapper -->
    <div class="content-wrapper">
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
</div>
@endsection