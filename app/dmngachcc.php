<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dmngachcc extends Model
{
    //kiem tra xem co dung ko
    protected $table = 'dmngachcc';
    protected $fillable = [
        'id',
        'msngbac',
        'phanloai',
        'tenngbac'
    ];
}
