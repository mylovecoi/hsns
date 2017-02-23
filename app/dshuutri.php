<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dshuutri extends Model
{
    protected $table = 'dshuutri';
    protected $fillable = [
        'id',
        'maht',
        'soqd',
        'ngayqd',
        'nguoiky',
        'coquanqd',
        'noidung',
        'ngayxet',
        'madv'
    ];

    public function hosotinhtrangct() {
        return $this->hasMany('App\hosotinhtrangct', 'maht');
    }
}
