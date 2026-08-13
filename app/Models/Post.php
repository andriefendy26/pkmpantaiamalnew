<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'slug', 'content', 'author_name', 'author_id',
        'post_category_id', 'publishing_date', 'image',
    ];

    protected $casts = [
        'publishing_date' => 'datetime',
    ];

    protected static function booted(): void
    {
        static::saving(function (self $post) {
            if (blank($post->slug)) {
                $post->slug = Str::slug($post->title);
            }
        });
    }

    public function postCategory(): BelongsTo
    {
        return $this->belongsTo(PostCategory::class);
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'post_tag');
    }

    public function scopePublished($query)
    {
        return $query->where(function ($q) {
            $q->whereNull('publishing_date')->orWhere('publishing_date', '<=', now());
        });
    }

    public function displayAuthorName(): string
    {
        return $this->author_name ?? '—';
    }
}
