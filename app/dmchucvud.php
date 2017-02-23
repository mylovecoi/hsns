<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dmchucvud extends Model
{
    protected $table = 'dmchucvud';
    protected $fillable = [
        'id',
        'macvd',
        'tencv',
        'ghichu',
        'sapxep',
        'madv'
    ];

    public function hosochucvud(){
        return $this->hasMany('App\hosochucvud','macvd');
    }
}
