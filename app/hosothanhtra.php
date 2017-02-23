<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hosothanhtra extends Model
{
    protected $table = 'hosothanhtra';
    protected $fillable = [
        'id',
        'macanbo',
        'ngaythang',
        'tenthanhtra',
        'noidung',
        'xeploai',
        'ketluan',
        'madv'
    ];

    public function hosocanbo(){
        $this->belongsTo('App\hosocanbo','macanbo');
    }
}
