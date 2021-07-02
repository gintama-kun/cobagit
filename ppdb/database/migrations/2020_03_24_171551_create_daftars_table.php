<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode')->nullable();
            $table->string('nama_lengkap')->nullable();
            $table->string('nama_panggilan')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->integer('nisn')->nullable();
            $table->string('agama')->nullable();
            $table->string('ayah')->nullable();
            $table->string('pendidikan_ayah')->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('ibu')->nullable();
            $table->string('pendidikan_ibu')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('wali')->nullable();
            $table->string('pendidikan_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('alamat')->nullable();
            $table->string('image')->nullable();
            $table->string('asal_sekolah')->nullable();
            $table->float('rata')->nullable();
            $table->string('pilihan1')->nullable();
            $table->string('pilihan2')->nullable();
            $table->string('no_telepon')->max(12);
            $table->string('status')->nullable();
            $table->string('jurusan')->nullable();
            $table->text('user_id')->nullable();
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
        Schema::dropIfExists('daftars');
    }
}
