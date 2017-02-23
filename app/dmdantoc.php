<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dmdantoc extends Model
{
    protected $table = 'dmdantoc';
    protected $fillable = [
        'id',
        'dantoc',
        'thieuso'
    ];
}
