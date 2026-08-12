<?php

namespace App\Models;

use App\Enums\ContentType;
use Illuminate\Database\Eloquent\Builder;

class Artikel extends Content
{
    protected static function booted(): void
    {
        parent::booted();

        static::addGlobalScope('type', function (Builder $query) {
            $query->where('type', ContentType::Artikel);
        });

        static::creating(function (self $artikel) {
            $artikel->type = ContentType::Artikel;
        });
    }
}
