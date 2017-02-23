<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dmquanhegd extends Model
{
    protected $table = 'dmquanhegd';
    protected $fillable = [
        'id',
        'quanhe',
        'nhom',
        'sapxep'
    ];
}
