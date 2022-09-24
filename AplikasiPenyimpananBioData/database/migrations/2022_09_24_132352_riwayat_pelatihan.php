<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RiwayatPelatihan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_pelatihan', function (Blueprint $table) {
            $table->uuid('id_riwayat_pelatihan');
            $table->uuid('id_biodata');
            $table->string('nama_kursus_seminar');
            $table->integer('sertifikat');
            $table->date('tahun');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat_pelatihan');
    }
}
