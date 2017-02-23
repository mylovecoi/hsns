<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ngachbac extends Model
{
    protected $table = 'ngachbac';
    protected $fillable = [
        'id',
        'msngbac',
        'plnb',
        'tennb',
        'namnb',
        'bac',
        'heso',
        'ptvk',
        'vk'
    ];

    public function hosoluong(){
        return $this->hasMany('App\hosoluong','id');
    }

    public function bangluong_ct(){
        return $this->hasMany('App\bangluong_ct','id');
    }
}
