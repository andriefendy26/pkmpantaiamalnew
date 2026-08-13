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
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelapor')->nullable(); // nullable untuk pengaduan anonim
            $table->string('email')->nullable();
            $table->string('no_hp')->nullable();
            // $table->string('judul');
            $table->text('isi_pengaduan');
            $table->enum('kategori', ['pelayanan', 'fasilitas', 'petugas', 'lainnya'])->default('lainnya');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduans');
    }
};
