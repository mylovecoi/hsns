<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dsnangluong extends Model
{
    protected $table = 'dsnangluong';
    protected $fillable = [
        'id',
        'manl',
        'loaids',
        'soqd',
        'ngayqd',
        'nguoiky',
        'coquanqd',
        'noidung',
        'ngayxet',
        'kemtheo',
        'madv'
    ];

    public function hosoluong(){
        return $this->hasMany('App\hosoluong','manl');
    }
}
