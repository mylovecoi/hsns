<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hosokyluat extends Model
{
    protected $table = 'hosokyluat';
    protected $fillable = [
        'id',
        'macanbo',
        'ngaythang',
        'hinhthuc',
        'noidung',
        'capqd',
        'ghichu',
        'madv'
    ];

    public function hosocanbo(){
        $this->belongsTo('App\hosocanbo','macanbo');
    }
}
