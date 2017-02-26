<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    protected $fillable = [
        'kode',
        'merk',
        'jenis',
        'nama',
        'stok',
        'img',
    ];

}
