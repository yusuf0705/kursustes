<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('materi', function (Blueprint $table) {
            $table->id('id_materi');
            $table->unsignedBigInteger('id_kursus');
            $table->unsignedBigInteger('id_tutor');
            $table->string('judul');
            $table->text('isi_materi');
            $table->string('file')->nullable();
            $table->timestamps();

            // Foreign key opsional, sesuaikan kalau tabel kursus/tutor tersedia
            // $table->foreign('id_kursus')->references('id_kursus')->on('kursus')->onDelete('cascade');
            // $table->foreign('id_tutor')->references('id')->on('tutor')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('materi');
    }
};
