<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hosotinhtrangct extends Model
{
    protected $table = 'hosotinhtrangct';
    protected $fillable = [
        'id',
        'macanbo',
        'maht',
        'mahts',
        'phanloaict',
        'kieuct',
        'tenct',
        'hientai',
        'madv'
    ];

    public function hosocanbo(){
        $this->belongsTo('App\hosocanbo','macanbo');
    }

    public function dshuutri(){
        $this->belongsTo('App\dshuutri','maht');
    }

    public function dshettapsu(){
        $this->belongsTo('App\dshettapsu','mahts');
    }
}
