<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phanloaingach extends Model
{
    protected $table = 'phanloaingach';
    protected $fillable = [
        'id',
        'msngbac',
        'phanloai'
    ];
}
