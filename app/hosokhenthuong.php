<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hosokhenthuong extends Model
{
    protected $table = 'hosokhenthuong';
    protected $fillable = [
        'id',
        'macanbo',
        'ngaythang',
        'hinhthuc',
        'noidung',
        'capqd',
        'ghichu',
        'madv'
    ];

    public function hosocanbo(){
        $this->belongsTo('App\hosocanbo','macanbo');
    }
}