<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sekolahs extends Model
{
    protected $table = 'sekolahs';
    protected $fillable = [
        'kepsek','operator','akreditasi','kurikulum','waktu','NPSN','status','bentuk_pendidikan','image','status_kepemilikan',
    ];
}
