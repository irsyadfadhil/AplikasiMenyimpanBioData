<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PendidikanTerakhir extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendidikan_terakhir', function (Blueprint $table) {
            $table->uuid('id_pendidikan_terakhir');
            $table->uuid('id_biodata');
            $table->string('jenjang_pendidikan_terakhir');
            $table->string('nama_institusi_akademi');
            $table->string('jurusan');
            $table->date('tahun_lulus');
            $table->integer('ipk');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pendidikan_terakhir');
    }
}
