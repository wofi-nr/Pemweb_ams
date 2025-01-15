<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'data_pembayaran';

    protected $primaryKey = 'id_pembayaran';

    public $timestamps = false;

    protected $fillable = [
        'tahun_ajaran',
        'nis',
        'siswa',
        'bulan',
        'jumlah_bayar',
        'tgl_bayar',
        'status_bayar',
    ];
}
