<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KunjunganPasien extends Model
{
    protected $fillable = [
        'tahun',
        'kategori',
        'jenis_kelamin',
        'jumlah',
    ];

    protected $casts = [
        'tahun' => 'integer',
        'jumlah' => 'integer',
    ];
}
