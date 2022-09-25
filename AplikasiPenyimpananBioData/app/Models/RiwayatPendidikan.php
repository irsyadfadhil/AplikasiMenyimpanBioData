<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPendidikan extends Model
{
    use HasFactory;
    protected $table = 'pendidikan_terakhir';
    protected $primaryKey = 'id_pendidikan_terakhir';
    protected $fillable = [
        'id_pendidikan_terakhir',
    'id_biodata',
    'jenjang_pendidikan_terakhir',
    'nama_institusi_akademi',
    'jurusan',
    'tahun_lulus',
    'ipk'];
}
