<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_siswas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_siswa');
            $table->string('nis');
            $table->string('nisn');
            $table->string('nama');
            $table->string('tmptlhr');
            $table->date('tgllhr');
            $table->string('alamat');
            $table->string('email');
            $table->string('notelp');
            $table->string('foto');
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
        Schema::dropIfExists('m_siswas');
    }
}
