<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('kursus', function (Blueprint $table) {
    $table->id('id_kursus');
    $table->unsignedBigInteger('id_tutor');
    $table->enum('kode_bahasa', ['English', 'Jepang', 'Mandarin', 'Korea', 'Spanyol', 'Jerman'])->unique();
    $table->foreign('id_tutor')->references('id_tutor')->on('tutor')->onDelete('cascade');
});

    }

    public function down(): void {
        Schema::dropIfExists('kursus');
    }
};
