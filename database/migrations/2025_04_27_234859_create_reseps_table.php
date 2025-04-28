<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('reseps', function (Blueprint $table) {
            $table->id();
            $table->string('judul_resep');
            $table->string('kategori');
            $table->text('bahan');
            $table->text('langkah_pembuatan');
            $table->integer('waktu_memasak');
            $table->string('penulis');
            $table->enum('tingkat_kesulitan', ['Mudah', 'Sedang', 'Sulit']);
            $table->timestamps();
            $table->softDeletes(); // Untuk fitur soft delete
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reseps');
    }
};
