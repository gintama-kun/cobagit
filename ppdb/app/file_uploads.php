<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class file_uploads extends Model
{
    protected $table = 'file_uploads';
    protected $fillable = [
       'file',
    ];
}
