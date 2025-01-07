@extends('layouts.app')

@section('title', 'EditDataSiswa')

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
                            <a href="dashboard.html" class="nav-link ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-user-graduate"></i>
                                <p>
                                    Data Siswa
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="input_siswa.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Input Siswa</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="edit_siswa.html" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Edit Data Siswa</p>
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
                            <h1 class="m-0">Edit Data Siswa</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="dashboard.html">Home</a></li>
                                <li class="breadcrumb-item active">Edit Data Siswa</li>
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
                            <h3 class="card-title">Form Edit Data Siswa</h3>
                        </div>
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="namaSiswa">Nama Siswa</label>
                                    <input type="text" class="form-control" id="namaSiswa" value="Nama Siswa Sebelumnya">
                                </div>
                                <div class="form-group">
                                    <label for="nis">NIS</label>
                                    <input type="text" class="form-control" id="nis" value="12345678">
                                </div>
                                <div class="form-group">
                                    <label for="kelas">Kelas</label>
                                    <select class="form-control" id="kelas">
                                        <option disabled>Pilih Kelas</option>
                                        <option selected>X IPA 1</option>
                                        <option>X IPA 2</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea class="form-control" id="alamat" rows="3">Alamat Sebelumnya</textarea>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <button type="button" class="btn btn-secondary" onclick="window.location.href='view_siswa.html'">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
        <!-- /.content-wrapper -->
@endsection