<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hosobinhbau extends Model
{
    protected $table = 'hosobinhbau';
    protected $fillable = [
        'id',
        'macanbo',
        'ngaytu',
        'ngayden',
        'hinhthuc',
        'noidung',
        'ketqua',
        'madv'
    ];

    public function hosocanbo(){
        $this->belongsTo('App\hosocanbo','macanbo');
    }
}
