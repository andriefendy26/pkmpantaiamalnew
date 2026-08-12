<?php

namespace App\Models;

use App\Enums\ContentStatus;
use App\Enums\ContentType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

/**
 * Base model for the shared `contents` table. Not meant to be used directly
 * in the admin panel — Artikel and Berita below add a global scope on
 * `type` so each Filament Resource only ever sees its own rows.
 */
class Content extends Model
{
    use SoftDeletes;

    protected $table = 'contents';

    protected $fillable = [
        'category_id', 'author_id', 'author_name', 'type',
        'title', 'slug', 'excerpt', 'content', 'thumbnail',
        'source', 'source_url', 'status', 'is_featured',
        'published_at', 'meta_title', 'meta_description',
        'canonical_url', 'og_image',
    ];

    protected $casts = [
        'type' => ContentType::class,
        'status' => ContentStatus::class,
        'is_featured' => 'boolean',
        'published_at' => 'datetime',
    ];

    protected static function booted(): void
    {
        static::saving(function (self $content) {
            if (blank($content->slug)) {
                $content->slug = Str::slug($content->title);
            }
        });
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class, 'author_id');
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'content_tag');
    }

    public function scopePublished($query)
    {
        return $query->where('status', ContentStatus::Published)
            ->where('published_at', '<=', now());
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function displayAuthorName(): string
    {
        return $this->author?->name ?? $this->author_name ?? '—';
    }
}
