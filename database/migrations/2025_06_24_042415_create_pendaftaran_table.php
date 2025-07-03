
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->id('id_pendaftaran');
            $table->unsignedBigInteger('id_pelajar');
            $table->unsignedBigInteger('id_kursus'); // <== Pastikan ini ada
            $table->enum('kode_bahasa', ['English', 'Jepang', 'Mandarin', 'Korea', 'Spanyol', 'Jerman']);
            $table->timestamp('tanggal_daftar')->nullable();
            $table->integer('durasi')->nullable();
            $table->integer('harga')->unsigned()->nullable(); // ✅ BENAR
            $table->enum('status', ['pending', 'disetujui', 'ditolak'])->default('pending');
            $table->timestamps();

            // FOREIGN KEY
$table->foreign('id_kursus')->references('id_kursus')->on('kursus')->onDelete('cascade');

            $table->foreign('id_pelajar')->references('id_pelajar')->on('pelajar')->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::dropIfExists('pendaftaran');
    }
};
