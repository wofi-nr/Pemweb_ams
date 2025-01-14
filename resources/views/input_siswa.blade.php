@extends('layouts.app')

@section('title', 'Input Data Siswa')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Input Data Siswa</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Input Data Siswa</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Form Input Siswa</h3>
                </div>

                <!-- Display success message if available -->
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Display validation errors -->
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('data_siswa.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="namaSiswa">Nama Siswa</label>
                            <input 
                                type="text" 
                                class="form-control @error('nama') is-invalid @enderror" 
                                id="namaSiswa" 
                                name="nama" 
                                placeholder="Masukkan Nama Siswa" 
                                value="{{ old('nama') }}" 
                                required>
                            @error('nama')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nis">NIS</label>
                            <input 
                                type="text" 
                                class="form-control @error('nis') is-invalid @enderror" 
                                id="nis" 
                                name="nis" 
                                placeholder="Masukkan Nomor Induk Siswa" 
                                value="{{ old('nis') }}" 
                                required>
                            @error('nis')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- New input for Username -->
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input 
                                type="text" 
                                class="form-control @error('username') is-invalid @enderror" 
                                id="username" 
                                name="username" 
                                placeholder="Masukkan Username" 
                                value="{{ old('username') }}" 
                                required>
                            @error('username')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <select 
                                class="form-control @error('nama_kelas') is-invalid @enderror" 
                                id="kelas" 
                                name="nama_kelas" 
                                required>
                                <option selected disabled>Pilih Kelas</option>
                                @foreach($kelas as $item)
                                    <option value="{{ $item->nama_kelas }}" 
                                        {{ old('nama_kelas') == $item->nama_kelas ? 'selected' : '' }}>
                                        {{ $item->nama_kelas }}
                                    </option>
                                @endforeach
                            </select>
                            @error('nama_kelas')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea 
                                class="form-control @error('alamat') is-invalid @enderror" 
                                id="alamat" 
                                name="alamat" 
                                rows="3" 
                                placeholder="Masukkan Alamat" 
                                required>{{ old('alamat') }}</textarea>
                            @error('alamat')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input 
                                type="date" 
                                class="form-control @error('tgl_lahir') is-invalid @enderror" 
                                id="tgl_lahir" 
                                name="tgl_lahir" 
                                value="{{ old('tgl_lahir') }}" 
                                required>
                            @error('tgl_lahir')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input 
                                type="password" 
                                class="form-control @error('password') is-invalid @enderror" 
                                id="password" 
                                name="password" 
                                placeholder="Masukkan Password" 
                                required>
                            @error('password')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
