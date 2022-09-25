<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPelatihan extends Model
{
    use HasFactory;
    protected $table = 'riwayat_pelatihan';
    protected $primaryKey = 'id_riwayat_pelatihan';
    protected $fillable = [
    'id_riwayat_pelatihan',
    'id_biodata',
    'nama_kursus_seminar',
    'sertifikat',
    'tahun'];
}
