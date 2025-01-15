<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TahunAjaran extends Model
{
    protected $table = 'data_tahun_ajaran';
    protected $primaryKey = 'id'; // Ganti dengan kolom ID utama jika berbeda
    protected $fillable = ['tahun_ajaran', 'status', 'tgl_tambah'];
    public $timestamps = false; // Jika tabel tidak memiliki kolom timestamps
}
