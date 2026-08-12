<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * `requirements` and `procedure` are stored as JSON rather than a
     * relational table. Each is an ordered list that only ever belongs to
     * one Layanan, isn't searched/filtered independently, and isn't reused
     * across records — a Filament Repeater maps onto a JSON array with zero
     * extra migrations/models, whereas a relational table would add two more
     * tables, two more resources or relation managers, and joins for no real
     * benefit here. If a future requirement needs a single requirement item
     * to be independently searchable, reportable, or shared across services,
     * that's the signal to split it into a real `layanan_requirements` table.
     */
    public function up(): void
    {
        Schema::create('layanans', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('short_description')->nullable();
            $table->text('description')->nullable();
            $table->string('icon')->nullable();
            $table->string('image')->nullable();
            $table->json('requirements')->nullable();
            $table->json('procedure')->nullable();
            $table->string('duration')->nullable(); // free text: "3 hari kerja"
            $table->string('cost')->nullable();      // free text: "Gratis" / "Rp 25.000"
            $table->string('contact')->nullable();
            $table->string('url')->nullable();
            $table->unsignedInteger('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->softDeletes();

            $table->index(['is_active', 'sort_order']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('layanans');
    }
};
