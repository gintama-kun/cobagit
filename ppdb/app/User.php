<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Cache;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $fillable = [
        'nama_lengkap','nama_panggilan','jenis_kelamin','tgl_lahir','nisn','nip','asal_sekolah','email','image','no_hp','alamat','status','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function isOnline()
    {
        return Cache::has('user-is-online-' . $this->id);
    }

    public function daftar()
    {
        return $this->hasMany(Daftar::Class);
    }

}

