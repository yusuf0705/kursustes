<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->bigIncrements('id_jadwal');
            $table->unsignedBigInteger('id_kursus');
            $table->unsignedBigInteger('id_tutor');
            $table->string('hari');
            $table->string('mode_belajar');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->timestamps();

            // Relasi (foreign key)

    $table->foreign('id_kursus')->references('id_kursus')->on('kursus')->onDelete('cascade');
    $table->foreign('id_tutor')->references('id_tutor')->on('tutor')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jadwal');
    }
};
