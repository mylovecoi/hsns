<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dshettapsu extends Model
{
    protected $table = 'dshettapsu';
    protected $fillable = [
        'id',
        'mahts',
        'soqd',
        'ngayqd',
        'nguoiky',
        'coquanqd',
        'noidung',
        'ngayxet',
        'madv'
    ];

    public function hosoluong(){
        return $this->hasMany('App\hosoluong','mahts');
    }

    public function hosotinhtrangct() {
        return $this->hasMany('App\hosotinhtrangct', 'mahts');
    }
}
