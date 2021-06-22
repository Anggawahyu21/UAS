<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_gurus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_guru');
            $table->string('nip');
            $table->string('nama');
            $table->string('profesi');
            $table->string('tempatlhr');
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
        Schema::dropIfExists('m_gurus');
    }
}
