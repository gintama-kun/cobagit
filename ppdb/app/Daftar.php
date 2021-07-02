<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    protected $table ='daftars';
    protected $fillable = [
        'kode', 'nama_lengkap','nama_panggilan','tgl_lahir','alamat','image','asal_sekolah','rata', 'pilihan1','pilihan2','no_telepon','status','jurusan',
    ];

    public function user()
    {
        return $this->belongsTo(User::Class);
    }
}
