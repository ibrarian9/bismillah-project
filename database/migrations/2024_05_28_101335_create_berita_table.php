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
        Schema::create('berita', function (Blueprint $table) {
            $table->id();
            $table->string("judul", 50);
            $table->string("author", 50);
            $table->text("isi_berita");
            $table->text("foto_berita");
            $table->unsignedBigInteger("id_kategori")->nullable();
            $table->index("id_kategori");
            $table->timestamp("tanggal_terbit")->nullable();
            $table->timestamps();
            $table->foreign("id_kategori")
                ->references("id")
                ->on("kategori")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berita');
    }
};
