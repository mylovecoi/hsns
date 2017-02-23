<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GeneralConfigs extends Model
{
    protected $table = 'general_configs';
    protected $fillable = [
        'id',
        'maqhns',
        'tendonvi',
        'diachi',
        'teldv',
        'thutruong',
        'ketoan',
        'nguoilapbieu',
        'namhethong',
        'sodvlt',
        'sodvvt',
        'ttlh',
        'setting'
    ];
}
