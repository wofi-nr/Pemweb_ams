@extends('layouts.app')

@section('title', 'Setting Tahun Ajaran')

@section('content') 
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
                    <!-- Form untuk input tahun ajaran -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Input Tahun Ajaran</h3>
                        </div>
                        <form action="{{ route('setting_th_ajaran.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="tahunAjaran">Tahun Ajaran</label>
                                    <input type="text" class="form-control" name="tahunAjaran" id="tahunAjaran" placeholder="Masukkan Tahun Ajaran (contoh: 2025/2026)" required>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>

                    <!-- Daftar Tahun Ajaran -->
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
                            <tbody>
                                @forelse ($tahunAjaranList as $index => $tahunAjaran)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $tahunAjaran->tahun_ajaran }}</td>
                                        <td>
                                            <form action="{{ route('setting_th_ajaran.delete', $tahunAjaran->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-center">Belum ada data tahun ajaran</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </section>
@endsection
