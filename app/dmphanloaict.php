<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dmphanloaict extends Model
{
    protected $table = 'dmphanloaict';
    protected $fillable = [
        'id',
        'phanloaict',
        'kieuct',
        'tenct',
        'nhomct'
    ];
}
