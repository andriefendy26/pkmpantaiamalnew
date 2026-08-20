<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produk_layanans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->text('persyaratan')->nullable();
            $table->text('waktu_penyelesaian')->nullable();
            $table->string('biaya_tarif')->nullable();
            $table->boolean('is_published')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk_layanans');
    }
};
