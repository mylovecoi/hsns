<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hosochucvud extends Model
{
    protected $table = 'hosochucvud';
    protected $filltable = [
        'id',
        'macanbo',
        'macvd',
        'ngaytu',
        'ngayden',
        'noidungqd',
        'soqd',
        'ngayqd',
        'nguoiky',
        'madv'
    ];

    public function hosocanbo(){
        $this->belongsTo('App\hosocanbo','macanbo');
    }

    public function chucvud(){
        $this->belongsTo('App\dmchucvud','macvd');
    }
}
