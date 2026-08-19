<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyKepuasanMasyarakat extends Model
{
    use HasFactory;

    protected $fillable = [
        'tahun',
        'judul',
        'file_path',
        'is_published',
    ];

    protected $casts = [
        'is_published' => 'boolean',
    ];
}
