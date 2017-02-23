<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hosoluong extends Model
{
    protected $table = 'hosoluong';
    protected $fillable = [
        'id',
        'manl',
        'mahts',
        'id_nb',
        'macanbo',
        'phanloai',
        'msngbac',
        'ngaytu',
        'ngayden',
        'bac',
        'heso',
        'vuotkhung',
        'pthuong',
        'ketqua',
        'madv'
    ];

    public function hosocanbo(){
        $this->belongsTo('App\hosocanbo','macanbo');
    }

    public function dsnangluong(){
        $this->belongsTo('App\dsnangluong','manl');
    }

    public function dshettapsu(){
        $this->belongsTo('App\dshettapsu','mahts');
    }

    public function ngachbac(){
        $this->belongsTo('App\ngachbac','id_nb');
    }
}
