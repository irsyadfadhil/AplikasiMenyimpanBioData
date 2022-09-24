<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Biodata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata', function (Blueprint $table) {
            $table->uuid('id_biodata');
            $table->uuid('id_user');
            $table->string('posisi_dilamar');
            $table->string('no_ktp');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('golongan_darah');
            $table->string('status');
            $table->text('alamat_ktp');
            $table->text('alamat_tinggal');
            $table->string('email');
            $table->string('no_telp');
            $table->string('orang_terdekat_dihubungi');
            $table->uuid('id_pendidikan_terakhir');
            $table->uuid('id_riwayat_pelatihan');
            $table->uuid('id_riwayat_pekerjaan');
            $table->text('skill');
            $table->integer('bersedia_penempatan');
            $table->string('penghasilan_yang_diharapkan');
            $table->date('tanggal_penandatanganan_biodata');
            $table->string('nama_penandatanganan_biodata');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('biodata');
    }
}
