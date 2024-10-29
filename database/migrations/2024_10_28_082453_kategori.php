<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('kategori', function (Blueprint $table) {
            $table->id(); // Menambahkan kolom id
            $table->string('judul'); // Judul
            $table->text('deskripsi'); // Deskripsi
            $table->timestamps(); // Menambahkan created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('kategori'); // Menghapus tabel saat migrasi dibatalkan
    }
};
