<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;
    protected $table = 'biodata';
    protected $primaryKey = 'id_biodata';
    protected $fillable = [
    'id_user',
    'nama',
    'id_biodata',
    'posisi_dilamar',
    'no_ktp',
    'tempat_lahir',
    'tanggal_lahir',
    'jenis_kelamin',
    'agama',
    'golongan_darah',
    'alamat_ktp',
    'alamat_tinggal',
    'email',
    'status',
    'no_telp',
    'orang_terdekat_dihubungi',
    'id_pendidikan_terakhir',
    'id_riwayat_pelatihan',
    'id_riwayat_pekerjaan',
    'skill',
    'bersedia_penempatan',
    'penghasilan_yang_diharapkan',
    'tanggal_penandatanganan_biodata',
    'nama_penandatanganan_biodata'];

    public function RiwayatPendidikan()
    {
        return $this->belongsTo(RiwayatPendidikan::class, 'id_pendidikan_terakhir','id_pendidikan_terakhir');
    }

    public function RiwayatPelatihan()
    {
        return $this->belongsTo(RiwayatPelatihan::class, 'id_riwayat_pelatihan','id_riwayat_pelatihan');
    }

    public function RiwayatPekerjaan()
    {
        return $this->belongsTo(RiwayatPekerjaan::class, 'id_riwayat_pekerjaan','id_riwayat_pekerjaan');
    }

    public function User()
    {
        return $this->belongsTo(User::class, 'id','id_user');
    }
}
