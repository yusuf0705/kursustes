<?php

// 1. Quiz.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $table = 'quizzes';
    protected $primaryKey = 'id_quiz';

protected $fillable = ['judul', 'kode_bahasa', 'id_tutor', 'id_kursus'];

    public function questions()
    {
        return $this->hasMany(QuizQuestion::class, 'id_quiz', 'id_quiz');
    }



    public function kursus() {
        return $this->belongsTo(Kursus::class, 'id_kursus', 'id_kursus');
    }

    public function tutor() {
        return $this->belongsTo(Tutor::class, 'id_tutor', 'id_tutor');
    }
}

