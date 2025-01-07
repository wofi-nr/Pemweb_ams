@extends('layouts.app')

@section('title', 'Setting Tahun Ajaran')

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
                                <i class="nav-icon fas fa-cogs"></i>
                                <p>
                                    Pengaturan
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="setting_app.html" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pengaturan Umum</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="setting_th_ajaran.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pengaturan Th Ajaran</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="login.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Logout</p>
                                    </a>
                                </li>
                            </ul>
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
                            <h1 class="m-0">Pengaturan Tahun Ajaran</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="dashboard.html">Home</a></li>
                                <li class="breadcrumb-item active">Setting Tahun Ajaran</li>
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
                            <h3 class="card-title">Input Tahun Ajaran</h3>
                        </div>
                        <form id="tahunAjaranForm">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="tahunAjaran">Tahun Ajaran</label>
                                    <input type="text" class="form-control" id="tahunAjaran" placeholder="Masukkan Tahun Ajaran (contoh: 2025/2026)">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>

                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Daftar Tahun Ajaran</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tahun Ajaran</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="tahunAjaranTable">
                                    <!-- Data akan ditambahkan melalui JavaScript -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        @endsection