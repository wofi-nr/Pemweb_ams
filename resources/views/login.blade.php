@extends('layouts.master')

@section('content')
<div class="login-page">
    <div class="login-left">
        <div>
            <h1>Manajemen Siswa</h1>
            <p>Nama Sekolah Anda</p>
            <p>Selamat datang di aplikasi manajemen siswa yang inovatif.</p>
        </div>
    </div>
    <div class="login-right">
        <div class="login-card">
            <h2 class="text-center mb-4">Login</h2>
            <form action="{{ route('login') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="Masukkan email" required value="{{ old('email') }}">
        @error('email')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan password" required>
        @error('password')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-check mb-3">
        <input type="checkbox" class="form-check-input" id="remember" name="remember">
        <label class="form-check-label" for="remember">Ingat Saya</label>
    </div>
    <button type="submit" class="btn btn-success btn-block">Login</button>
    <p class="text-center mt-3">
        <a href="#">Lupa Password?</a>
    </p>
</form>

        </div>
    </div>
</div>
@endsection
