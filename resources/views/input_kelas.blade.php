@extends('layouts.app')

@section('title', 'Input Kelas')

@section('content')
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Input Data</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Input Data Kelas</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Notifikasi sukses -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Form Input Kelas</h3>
                </div>
                <form action="{{ route('kelas.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="namaKelas">Nama Kelas</label>
                            <input type="text" class="form-control @error('nama_kelas') is-invalid @enderror" id="namaKelas" name="nama_kelas" placeholder="Masukkan Nama Kelas" value="{{ old('nama_kelas') }}">
                            @error('nama_kelas')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="waliKelas">Wali Kelas</label>
                            <input type="text" class="form-control @error('wali_kelas') is-invalid @enderror" id="waliKelas" name="wali_kelas" placeholder="Masukkan Nama Wali Kelas" value="{{ old('wali_kelas') }}">
                            @error('wali_kelas')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="biayaSPP">Nominal SPP</label>
                            <input type="number" class="form-control @error('biaya_spp') is-invalid @enderror" id="biayaSPP" name="biaya_spp" placeholder="Masukkan Nominal SPP" value="{{ old('biaya_spp') }}">
                            @error('biaya_spp')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form>
            </div>

            <!-- Riwayat Data Kelas -->
            <div class="card mt-4">
                <div class="card-header">
                    <h3 class="card-title">Riwayat Data Kelas</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kelas</th>
                                <th>Wali Kelas</th>
                                <th>Nominal SPP</th>
                                <th>Tanggal Tambah</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data['kelas'] as $key => $kls)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $kls->nama_kelas }}</td>
                                    <td>{{ $kls->wali_kelas }}</td>
                                    <td>{{ number_format($kls->biaya_spp, 0, ',', '.') }}</td>
                                    <td>{{ $kls->tgl_tambah }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">Belum ada data kelas.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
