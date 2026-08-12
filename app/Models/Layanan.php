<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Layanan extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'slug', 'short_description', 'description',
        'icon', 'image', 'requirements', 'procedure',
        'duration', 'cost', 'contact', 'url',
        'sort_order', 'is_active',
    ];

    protected $casts = [
        'requirements' => 'array',
        'procedure' => 'array',
        'is_active' => 'boolean',
        'sort_order' => 'integer',
    ];

    protected static function booted(): void
    {
        static::saving(function (self $layanan) {
            if (blank($layanan->slug)) {
                $layanan->slug = Str::slug($layanan->title);
            }
        });
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order');
    }
}
