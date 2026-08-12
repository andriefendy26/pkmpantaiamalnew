<?php

namespace App\Models;

use App\Enums\ContentType;
use Illuminate\Database\Eloquent\Builder;

class Berita extends Content
{
    protected static function booted(): void
    {
        parent::booted();

        static::addGlobalScope('type', function (Builder $query) {
            $query->where('type', ContentType::Berita);
        });

        static::creating(function (self $berita) {
            $berita->type = ContentType::Berita;
        });
    }
}
