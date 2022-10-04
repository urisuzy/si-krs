<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosen', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jenis_kelamin')->nullable();
            $table->string('program_studi')->nullable();
            $table->string('fakultas')->nullable();
            $table->string('email')->nullable();
            $table->string('pendidikan')->nullable();
            $table->string('tgl_lahir')->nullable();
            $table->bigInteger('no_hp')->nullable();
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
        Schema::dropIfExists('dosen');
    }
};
