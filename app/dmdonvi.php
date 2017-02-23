<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dmdonvi extends Model
{
    protected $table = 'dmdonvi';
    protected $fillable = [
        'id',
        'madv',
        'tendv',
        'diachi',
        'sodt',
        'lanhdao',
        'songuoi'
    ];
}
