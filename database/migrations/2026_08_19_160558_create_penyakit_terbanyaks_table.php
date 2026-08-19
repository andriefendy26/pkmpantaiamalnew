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
        Schema::create('penyakit_terbanyaks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_penyakit');
            $table->unsignedInteger('jumlah_kasus');
            $table->unsignedInteger('tahun');
            $table->unsignedInteger('peringkat')->nullable(); // 1-10 untuk top 10
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyakit_terbanyaks');
    }
};
