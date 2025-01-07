@extends('layouts.app')

@section('title', 'View Kelas')

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
                        <a href="#" class="nav-link active">
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
                        <a href="#" class="nav-link ">
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

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <h1 class="m-0">View Data Kelas</h1>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Kelas</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kelas</th>
                                    <th>Wali Kelas</th>
                                    <th>Nominal Spp</th>
                                    <th>Jumlah Siswa</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>VII A</td>
                                    <td>Pak Budi</td>
                                    <td>150.000</td>
                                    <td>35</td>
                                    <td>
                                        <button class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Edit</button>
                                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>VIII B</td>
                                    <td>Bu Ani</td>
                                    <td>175.000</td>
                                    <td>35</td>
                                    <td>
                                        <button class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Edit</button>
                                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</button>
                                    </td>
                                </tr>
                                <!-- Tambahkan data kelas lainnya di sini -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection