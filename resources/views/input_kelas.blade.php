@extends('layouts.app')

@section('title', 'Input Kelas')

@section('content')
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Input Data Kelas</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard.html">Home</a></li>
                        <li class="breadcrumb-item active">Input Data Kelas</li>
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
                    <h3 class="card-title">Form Input Kelas</h3>
                </div>
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="namaKelas">Nama Kelas</label>
                            <input type="text" class="form-control" id="namaKelas" placeholder="Masukkan Nama Kelas">
                        </div>
                        <div class="form-group">
                            <label for="waliKelas">Wali Kelas</label>
                            <input type="text" class="form-control" id="waliKelas" placeholder="Masukkan Nama Wali Kelas">
                        </div>
                        <div class="form-group">
                            <label for="waliKelas">Nominal SPP</label>
                            <input type="text" class="form-control" id="waliKelas" placeholder="Masukkan Nama Wali Kelas">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </section>


@endsection