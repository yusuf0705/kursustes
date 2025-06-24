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
    Schema::create('quizzes', function (Blueprint $table) {
        $table->id('id_quiz'); // beri nama eksplisit
        $table->unsignedBigInteger('id_kursus');
        $table->unsignedBigInteger('id_tutor');
        
        $table->string('pertanyaan');
        $table->string('opsi_a');
        $table->string('opsi_b');
        $table->string('opsi_c');
        $table->string('opsi_d');
        $table->string('jawaban'); // A/B/C/D
        $table->timestamps();

        $table->foreign('id_kursus')->references('id_kursus')->on('kursus')->onDelete('cascade');
        $table->foreign('id_tutor')->references('id_tutor')->on('tutor')->onDelete('cascade');
    });
}

};
