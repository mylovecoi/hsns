<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dmchucvucq extends Model
{
    protected $table = 'dmchucvucq';
    protected $fillable = [
        'id',
        'macvcq',
        'tencv',
        'ghichu',
        'sapxep',
        'madv',
    ];

    public function bangluong_ct(){
        return $this->hasMany('App\bangluong_ct','macvcq');
    }

    public function hosochucvucq(){
        return $this->hasMany('App\hosochucvu','macvcq');
    }
}
