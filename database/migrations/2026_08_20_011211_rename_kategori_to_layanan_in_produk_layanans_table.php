<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('produk_layanans', function (Blueprint $table) {
            $table->string('layanan')->nullable()->after('nama_produk');
        });

        DB::table('produk_layanans')->whereNotNull('kategori')->update([
            'layanan' => DB::raw('kategori'),
        ]);

        Schema::table('produk_layanans', function (Blueprint $table) {
            $table->dropColumn('kategori');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('produk_layanans', function (Blueprint $table) {
            $table->string('kategori')->nullable()->after('nama_produk');
        });

        DB::table('produk_layanans')->whereNotNull('layanan')->update([
            'kategori' => DB::raw('layanan'),
        ]);

        Schema::table('produk_layanans', function (Blueprint $table) {
            $table->dropColumn('layanan');
        });
    }
};
