<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id('id_quiz');
            $table->unsignedBigInteger('id_kursus');
            $table->string('judul');
            $table->string('kode_bahasa');
            $table->unsignedBigInteger('id_tutor');
            $table->timestamps();

            $table->foreign('id_tutor')->references('id_tutor')->on('tutor')->onDelete('cascade');
            $table->foreign('id_kursus')->references('id_kursus')->on('kursus')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quizzes');
    }
};
