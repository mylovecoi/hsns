<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bangluong extends Model
{
    protected $table = 'bangluong';
    protected $fillable = [
        'id',
        'mabl',
        'thang',
        'nam',
        'noidung',
        'ngaylap',
        'nguoilap',
        'ghichu',
        'madv'
    ];

    public function bangluong_ct(){
       return $this->hasMany('App\bangluong_ct','mabl');
    }
}
