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
       Schema::create('pembayaran', function (Blueprint $table) {
        $table->id('id_pembayaran');
        $table->unsignedBigInteger('id_pendaftaran');
        $table->date('tanggal_bayar');
        $table->enum('status', ['pending', 'selesai'])->default('pending');
        $table->string('metode_pembayaran');
        $table->string('no_rek')->nullable();
        $table->string('bukti')->nullable(); // <- tambahkan di sini
    $table->timestamps();

    $table->foreign('id_pendaftaran')
        ->references('id_pendaftaran')
        ->on('pendaftaran')
        ->onDelete('cascade');
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
