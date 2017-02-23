<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hosoquanhegd extends Model
{
    protected $table = 'hosoquanhegd';
    protected $fillable = [
        'id',
        'macanbo',
        'phanloai',
        'quanhe',
        'hoten',
        'ngaysinh',
        'thongtinct',
        'madv'
    ];

    public function hosocanbo(){
        $this->belongsTo('App\hosocanbo','macanbo');
    }
}
