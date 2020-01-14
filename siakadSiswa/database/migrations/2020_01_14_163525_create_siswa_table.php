<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->bigIncrements('id_nis_siswa');
            $table->string('nama_siswa',25);
            $table->string('kelas',70);
            $table->string('tanggal_lahir',13);
            $table->string('tempat_lahir',12);
            $table->string('alamat',20);
            $table->string('no_telp',20);
            $table->string('kota',30);
            $table->string('foto_siswa',50);
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
        Schema::dropIfExists('siswa');
    }
}
