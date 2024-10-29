<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Agenda extends Migration
{
    public function up(): void
    {
        Schema::create('agenda', function (Blueprint $table) {
            $table->id(); // Menambahkan kolom id
            $table->string('judul'); // Judul
            $table->text('deskripsi'); // Deskripsi
            $table->date('tanggal'); // Tanggal
            $table->foreignId('kategori_id')->constrained('kategori')->onDelete('cascade'); // Kunci asing untuk kategori
            $table->timestamps(); // Menambahkan created_at dan updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('agenda'); // Menghapus tabel saat migrasi dibatalkan
    }


}
