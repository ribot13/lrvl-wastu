<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merk extends Model {

    protected $table = 'merk';
    protected $fillable = [
        'kode',
        'nama',
        'deskripsi',
        '_active',
    ];

}
