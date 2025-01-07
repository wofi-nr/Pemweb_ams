@extends('layouts.app')

@section('title', 'Setting Aplikasi')

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
        <div class="content-header">
            <div class="container-fluid">
                <h1 class="m-0">Setting Aplikasi</h1>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Pengaturan Umum</h3>
                    </div>
                    <form>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="namaSekolah">Nama Aplikasi atau Sekolah</label>
                                <input type="text" class="form-control" id="namaSekolah" placeholder="Masukkan Nama Sekolah">
                            </div>
                            <div class="form-group">
                                <label for="alamatSekolah">Alamat Sekolah</label>
                                <textarea class="form-control" id="alamatSekolah" rows="3" placeholder="Masukkan Alamat Sekolah"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="temaAplikasi">Tema Aplikasi</label>
                                <select class="form-control" id="temaAplikasi">
                                    <option value="default">Default</option>
                                    <option value="dark">Dark Mode</option>
                                    <option value="light">Light Mode</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


