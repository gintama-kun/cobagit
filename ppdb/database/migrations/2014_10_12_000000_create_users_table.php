<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable();
            $table->string('nama_lengkap')->nullable();
            $table->string('nama_panggilan')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('nisn')->nullable();
            $table->string('nip')->nullable();
            $table->string('asal_sekolah')->nullable();
            $table->string('image')->nullable();
            $table->string('no_hp')->nullbale()->max(12);
            $table->string('alamat')->nullable();
            $table->string('role')->nullable();
            $table->string('status')->nullable();
            
            $table->string('email')->unique();
            $table->longText('content')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
