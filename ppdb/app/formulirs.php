<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class formulirs extends Model
{
    protected $fillable = [
        'kode', 'nama_lengkap','nama_panggilan','tgl_lahir','alamat','image','asal_sekolah','rata', 'pilihan1','pilihan2','no_telepon','status','jurusan',
    ];
}
