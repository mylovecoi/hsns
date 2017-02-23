<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hosocongtacnn extends Model
{
    protected $table = 'hosocongtacnn';
    protected $fillable = [
        'id',
        'macanbo',
        'ngaytu',
        'ngayden',
        'noidung',
        'doandi',
        'kinhphi',
        'nguonkp',
        'nuoc',
        'madv'
    ];

    public function hosocanbo(){
        $this->belongsTo('App\hosocanbo','macanbo');
    }
}
