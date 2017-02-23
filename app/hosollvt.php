<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hosollvt extends Model
{
    protected $table = 'hosollvt';
    protected $fillable = [
        'id',
        'macanbo',
        'ngaytu',
        'ngayden',
        'quanham',
        'chucvu',
        'qhcn',
        'madv'
    ];

    public function hosocanbo(){
        $this->belongsTo('App\hosocanbo','macanbo');
    }
}
