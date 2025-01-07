@extends('layouts.app')

@section('title', 'Input Pembayaran')

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
</div>
@endsection