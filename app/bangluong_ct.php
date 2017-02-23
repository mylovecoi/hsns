<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bangluong_ct extends Model
{
    protected $table = 'bangluong_ct';
    protected $fillable = [
        'id',
        'mabl',
        'macvcq',
        'mapb',
        'id_nb',
        'msngbac',
        'macanbo',
        'tencanbo',
        'masoms',
        'heso',
        'vuotkhung',
        'pcct',
        'pckct',
        'pck',
        'pccv',
        'pckv',
        'pcth',
        'pcdd',
        'pcdh',
        'pcld',
        'pcdbqh',
        'pcudn',
        'pctn',
        'pctnn',
        'pcdbn',
        'pcvk',
        'pckn',
        'pcdang',
        'pccovu',
        'pclt',
        'pcd',
        'pctr',
        'ptbhxh',
        'ptbhyt',
        'ptkpcd',
        'ptbhtn',
        'tonghs',
        'ttl',
        'giaml',
        'bhct',
        'tluong',
        'stbhxh',
        'stbhyt',
        'stkpcd',
        'stbhtn',
        'ttbh',
        'gttncn',
        'luongtn'
    ];

    public function bangluong(){
        $this->belongsTo('App\bangluong','mabl');
    }

    public function chucvucq(){
        $this->belongsTo('App\dmchucvucd','macvcq');
    }

    public function phongban(){
        $this->belongsTo('App\dmphongban','mapb');
    }

    public function ngachbac(){
        $this->belongsTo('App\ngachbac','id_nb');
    }
}
