// app/Models/TahunAjaran.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TahunAjaran extends Model
{
    protected $table = 'data_tahun_ajaran';
    protected $fillable = ['tahun_ajaran', 'status', 'tgl_tambah'];
    public $timestamps = false; // Jika Anda ingin menggunakan current_timestamp()
}
