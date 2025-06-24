<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorTable extends Migration
{
    public function up()
    {
        Schema::create('tutor', function (Blueprint $table) {
            $table->id('id_tutor');
            $table->unsignedBigInteger('user_id');
            $table->string('name');

            // Kolom lain sesuai kebutuhan
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tutor');
    }
}
