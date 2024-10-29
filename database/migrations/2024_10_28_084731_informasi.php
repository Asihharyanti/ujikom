<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Informasi extends Migration
{
    public function up(): void
    {
        Schema::create('informasi', function (Blueprint $table) {
            $table->id(); // Menambahkan kolom id
            $table->string('judul'); // Judul
            $table->text('isi_info'); // Deskripsi
            $table->string('foto')->nullable(); // Kolom foto, nullable jika tidak wajib
            $table->foreignId('kategori_id')->constrained('kategori')->onDelete('cascade'); // Kunci asing untuk kategori
            $table->timestamps(); // Menambahkan created_at dan updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('informasi'); // Menghapus tabel saat migrasi dibatalkan
    }
}
