@extends('layouts.app')

@section('title', 'Input Kelas')

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

 <!-- Content Wrapper -->
 <div class="content-wrapper">
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Input Data Kelas</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard.html">Home</a></li>
                        <li class="breadcrumb-item active">Input Data Kelas</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Form Input Kelas</h3>
                </div>
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="namaKelas">Nama Kelas</label>
                            <input type="text" class="form-control" id="namaKelas" placeholder="Masukkan Nama Kelas">
                        </div>
                        <div class="form-group">
                            <label for="waliKelas">Wali Kelas</label>
                            <input type="text" class="form-control" id="waliKelas" placeholder="Masukkan Nama Wali Kelas">
                        </div>
                        <div class="form-group">
                            <label for="waliKelas">Nominal SPP</label>
                            <input type="text" class="form-control" id="waliKelas" placeholder="Masukkan Nama Wali Kelas">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

@endsection