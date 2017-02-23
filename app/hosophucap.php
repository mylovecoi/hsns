<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hosophucap extends Model
{
    protected $table = 'hosophucap';
    protected $fillable = [
        'id',
        'mapc',
        'macanbo',
        'ngaytu',
        'ngayden',
        'hesopc',
        'ghichupc',
        'madv'
    ];

    public function hosocanbo(){
        $this->belongsTo('App\hosocanbo','macanbo');
    }

    public function dmphucap(){
        $this->belongsTo('App\dmphucap','mapc');
    }
}
