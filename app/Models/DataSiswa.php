<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSiswa extends Model
{
    use HasFactory;

    protected $table = 'data_siswa';

    protected $fillable = [
        'nis',
        'username',
        'password',
        'nama_kelas',
        'nama',
        'alamat',
        'tgl_lahir',
    ];

    protected $guarded = ['id_siswa'];
}
