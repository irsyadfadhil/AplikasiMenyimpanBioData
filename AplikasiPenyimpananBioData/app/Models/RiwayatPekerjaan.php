<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPekerjaan extends Model
{
    use HasFactory;
    protected $table = 'riwayat_pekerjaan';
    protected $primaryKey = 'id_riwayat_pekerjaan';
    protected $fillable = [
    'id_riwayat_pekerjaan',
    'id_biodata',
    'nama_perusahaan',
    'posisi_terakhir',
    'pendapat_terakhir',
    'tahun'];
}
