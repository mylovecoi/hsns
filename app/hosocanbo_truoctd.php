<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hosocanbo_truoctd extends Model
{
    protected $table = 'hosocanbo_truoctd';
    protected $filltable = [
        'id',
        'macanbo',
        'ngaytu',
        'ngayden',
        'nghenghiep',
        'coquan',
        'chucvu',
        'madv',
    ];

    public function canbo(){
        $this->belongsTo('App\hosocanbo','macanbo');
    }
}
