<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProdukLayanan extends Model
{
    protected $fillable = [
        'nama_produk',
        'layanan',
        'detail',
        'persyaratan',
        'waktu_penyelesaian',
        'biaya_tarif',
        'is_published',
    ];

    protected $casts = [
        'is_published' => 'boolean',
    ];
}
