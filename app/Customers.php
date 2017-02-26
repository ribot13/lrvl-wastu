<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model {

    protected $fillable = [
        'jenis',
        'nama',
        'email',
        'alamat_1',
        'alamat_2',
        'propinsi',
        'kota',
        'kecamatan',
        'kodepos',
        'phone',
        'mobile',
        '_active',
    ];

}
