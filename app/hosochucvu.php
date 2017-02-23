<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hosochucvu extends Model
{
    protected $table = 'hosochucvu';
    protected $fillable = [
        'id',
        'macanbo',
        'mapb',
        'macvcq',
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

    public function chucvucq(){
        $this->belongsTo('App\dmchucvucq','macvcq');
    }
}
