<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelajarTable extends Migration
{
    public function up()
    {
        Schema::create('pelajar', function (Blueprint $table) {
            $table->id('id_pelajar');
            $table->unsignedBigInteger('user_id');
            $table->string('name');

            // Tambahkan kolom lain sesuai kebutuhan
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pelajar');
    }
}
