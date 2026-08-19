<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PenyakitTerbanyak extends Model
{
    protected $fillable = [
        'nama_penyakit',
        'jumlah_kasus',
        'tahun',
        'peringkat',
    ];

    protected $casts = [
        'jumlah_kasus' => 'integer',
        'tahun' => 'integer',
        'peringkat' => 'integer',
    ];
}
