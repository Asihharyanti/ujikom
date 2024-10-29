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
        Schema::create('cache', function (Blueprint $table) {
            $table->string('key')->primary(); // Kunci utama
            $table->mediumText('value'); // Nilai yang disimpan dalam cache
            $table->integer('expiration'); // Waktu kedaluwarsa dalam detik
            $table->index('key'); // Menambahkan index untuk kolom key
        });

        Schema::create('cache_locks', function (Blueprint $table) {
            $table->string('key')->primary(); // Kunci utama
            $table->string('owner'); // Pemilik kunci
            $table->integer('expiration'); // Waktu kedaluwarsa dalam detik
            $table->index('key'); // Menambahkan index untuk kolom key
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cache_locks'); // Menghapus tabel cache_locks terlebih dahulu
        Schema::dropIfExists('cache'); // Kemudian menghapus tabel cache
    }
};
