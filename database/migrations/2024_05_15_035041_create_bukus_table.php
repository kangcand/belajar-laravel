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
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->string('judul')->unique();
            $table->string('isbn');
            $table->text('deskripsi');
            $table->integer('jml_halaman');
            $table->string('cover');
            $table->date('tgl_terbit');
            $table->foreignId('id_penulis')->onDelete('cascade');
            $table->timestamps();
        });

        // membuat table pivot(table bantu) 'genre_buku'
        Schema::create('genre_buku', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_buku')->onDelete('cascade');
            $table->foreignId('id_genre')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukus');
        Schema::dropIfExists('genre_buku');
    }
};
