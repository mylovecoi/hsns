<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hosobaohiemyte extends Model
{
    protected $table = 'hosobaohiemyte';
    protected $fillable = [
        'id',
        'macanbo',
        'ngaytu',
        'ngayden',
        'ngaylinhthe',
        'noidangky',
        'sothebh',
        'madv'
    ];

    public function hosocanbo(){
        $this->belongsTo('App\hosocanbo','macanbo');
    }
}
