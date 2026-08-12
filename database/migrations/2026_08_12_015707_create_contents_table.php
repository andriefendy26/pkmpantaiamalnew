<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Artikel and Berita are stored in ONE table with a `type` discriminator
     * column instead of two separate tables. See docs/design-notes.md for the
     * full trade-off discussion — short version: the two content types share
     * ~90% of their schema, categories, and tags, so a shared table with two
     * thin Eloquent subclasses (Artikel, Berita) avoids duplicating the
     * migration, the pivot table, and the Filament resource form/table logic,
     * while a global scope keeps each Filament Resource seeing only its own
     * rows.
     */
    public function up(): void
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->nullable()->constrained()->nullOnDelete();

            // Prefer a real FK to `users` so bylines link to an actual admin
            // account (avatar, profile, etc). `author_name` is a free-text
            // fallback for guest/external bylines that don't have a user
            // record — common for Berita sourced from outside the org.
            $table->foreignId('author_id')->nullable()->constrained('users')->nullOnDelete();
            $table->string('author_name')->nullable();

            $table->string('type', 20); // 'artikel' | 'berita'
            $table->string('title');
            $table->string('slug');
            $table->string('excerpt', 500)->nullable();
            $table->longText('content');
            $table->string('thumbnail')->nullable();

            // Berita-only fields. Left nullable rather than split into a
            // separate table — see design notes.
            $table->string('source')->nullable();
            $table->string('source_url')->nullable();

            $table->string('status', 20)->default('draft'); // draft|published|archived
            $table->boolean('is_featured')->default(false);
            $table->timestamp('published_at')->nullable();

            $table->string('meta_title')->nullable();
            $table->string('meta_description', 500)->nullable();
            $table->string('canonical_url')->nullable();
            $table->string('og_image')->nullable();

            $table->timestamps();
            $table->softDeletes();

            // Slug is unique per content type, not globally — an Artikel and
            // a Berita are allowed to share a slug since they'll live under
            // different URL prefixes (/artikel/{slug}, /berita/{slug}).
            $table->unique(['type', 'slug']);
            $table->index(['type', 'status', 'published_at']);
            $table->index('is_featured');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contents');
    }
};
