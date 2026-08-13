<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'nama_pelapor',
        'email',
        'no_hp',
        'isi_pengaduan',
        'kategori',
    ];

    protected $casts = [
        'kategori' => 'string',
    ];

    // Accessor untuk cek apakah pengaduan anonim (nama_pelapor kosong)
    public function getIsAnonimAttribute(): bool
    {
        return blank($this->nama_pelapor);
    }
}
