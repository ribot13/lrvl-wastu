<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisProduk extends Model
{
    protected $table = 'products_jenis';
    protected $fillable = [
        'merk',
        'nama',
        '_active',
    ];
}
