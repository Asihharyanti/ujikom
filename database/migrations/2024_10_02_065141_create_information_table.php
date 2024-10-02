<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationsTable extends Migration
{
    public function up()
    {
        Schema::create('informations', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Judul informasi
            $table->text('content'); // Isi informasi
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('informations');
    }
}