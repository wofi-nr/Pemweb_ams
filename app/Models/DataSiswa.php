<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSiswa extends Model
{
    use HasFactory;

    protected $table = 'data_siswa';

    // Tentukan kolom yang dapat diisi (fillable)
    protected $fillable = [
        'nis',
        'username',
        'password',
        'nama_kelas',
        'nama',
        'alamat',
        'tgl_lahir',
    ];

    // Menonaktifkan penggunaan created_at dan updated_at
    public $timestamps = false;

    // Tentukan kolom yang tidak dapat diisi (optional)
    protected $guarded = ['id_siswa'];
}
