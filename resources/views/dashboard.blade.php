@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <h1 class="m-0">View Data Kelas</h1>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <i class="fas fa-chalkboard-teacher"></i> Total Kelas
                    </div>
                    <div class="card-body">
                        <h5 class="text-center">35 Kelas</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-success text-white">
                        <i class="fas fa-user-graduate"></i> Total Data Siswa
                    </div>
                    <div class="card-body">
                        <h5 class="text-center">100 Siswa</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                        <div class="card shadow-sm">
                            <div class="card-header bg-warning text-white">
                                <i class="fas fa-file-invoice-dollar"></i> Total Data Pembayaran SPP
                            </div>
                            <div class="card-body">
                                <h5 class="text-center">100 Data</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card shadow-sm">
                            <div class="card-header bg-danger text-white">
                                <i class="fas fa-money-check-alt"></i> Total Pembayaran SPP
                            </div>
                            <div class="card-body">
                                <h5 class="text-center">Rp. 1.000.000</h5>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
</div>
@endsection
