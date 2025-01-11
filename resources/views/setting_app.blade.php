@extends('layouts.app')

@section('title', 'Setting Aplikasi')

@section('content')
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
 @endsection


