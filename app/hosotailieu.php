<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hosotailieu extends Model
{
    protected $table = 'hosotailieu';
    protected $fillable = [
        'id',
        'macanbo',
        'ngaybangiao',
        'nguoinhan',
        'tentailieu',
        'phanloai',
        'ghichu',
        'madv'
    ];

    public function hosocanbo(){
        $this->belongsTo('App\hosocanbo','macanbo');
    }
}
