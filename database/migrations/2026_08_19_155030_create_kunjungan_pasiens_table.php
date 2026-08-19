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
        Schema::create('kunjungan_pasiens', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('tahun');
            $table->string('kategori')->nullable(); // e.g., Bulan, Triwulan, atau jenis layanan
            $table->enum('jenis_kelamin', ['laki_laki', 'perempuan']);
            $table->unsignedInteger('jumlah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kunjungan_pasiens');
    }
};
