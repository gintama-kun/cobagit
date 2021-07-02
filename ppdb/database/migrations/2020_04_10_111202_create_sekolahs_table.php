<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSekolahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sekolahs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kepsek')->nullable();
            $table->string('operator')->nullable();
            $table->string('akreditasi')->nullable();
            $table->string('kurikulum')->nullable();
            $table->string('waktu')->nullable();
            $table->string('NPSN')->nullable();
            $table->string('status')->nullable();
            $table->string('bentuk_pendidikan')->nullable();
            $table->string('status_kepemilikan')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('sekolahs');
    }
}
