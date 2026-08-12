<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('gallery_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gallery_id')->constrained()->cascadeOnDelete();
            $table->string('title')->nullable();
            $table->string('caption')->nullable();
            $table->string('media_type', 20)->default('image'); // image|video
            $table->string('file_path');
            $table->string('thumbnail')->nullable();
            $table->unsignedInteger('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->index(['gallery_id', 'sort_order']);
            $table->index('media_type');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('gallery_items');
    }
};
