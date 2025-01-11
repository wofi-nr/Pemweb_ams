@extends('layouts.app')

@section('title', 'Edit Data Kelas')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <h1 class="m-0">Edit Data Kelas</h1>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Form Edit Data Kelas</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/edit-data-kelas') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nama_kelas">Nama Kelas</label>
                        <input type="text" id="nama_kelas" name="nama_kelas" class="form-control" placeholder="Masukkan Nama Kelas" value="VII A" required>
                    </div>
                    <div class="form-group">
                        <label for="wali_kelas">Wali Kelas</label>
                        <input type="text" id="wali_kelas" name="wali_kelas" class="form-control" placeholder="Masukkan Nama Wali Kelas" value="Pak Budi" required>
                    </div>
                    <div class="form-group">
                        <label for="nominal_spp">Nominal SPP</label>
                        <input type="number" id="nominal_spp" name="nominal_spp" class="form-control" placeholder="Masukkan Nominal SPP" value="150000" required>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_siswa">Jumlah Siswa</label>
                        <input type="number" id="jumlah_siswa" name="jumlah_siswa" class="form-control" placeholder="Masukkan Jumlah Siswa" value="35" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan Perubahan</button>
                        <a href="{{ url('/view-kelas') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

