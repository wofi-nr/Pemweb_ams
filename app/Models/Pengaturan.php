<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengaturan extends Model
{
    protected $table = 'pengaturan';

    protected $fillable = [
        'key',
        'nilai',
    ];

    public $timestamps = false; // Tidak menggunakan `created_at` dan `updated_at`

    // Fungsi untuk mendapatkan nilai berdasarkan key
    public static function getValue($key)
    {
        return self::where('key', $key)->value('nilai');
    }

    // Fungsi untuk memperbarui atau menambah nilai berdasarkan key
    public static function setValue($key, $value)
    {
        return self::updateOrCreate(['key' => $key], ['nilai' => $value]);
    }
}
