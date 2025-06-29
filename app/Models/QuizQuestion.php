<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuizQuestion extends Model
{
    protected $table = 'quiz_questions';
    protected $primaryKey = 'id_question';

    protected $fillable = [
        'id_quiz',
        'pertanyaan',
        'opsi_A',
        'opsi_B',
        'opsi_C',
        'opsi_D',
        'jawaban'
    ];

    public function quiz()
    {
        return $this->belongsTo(Quiz::class, 'id_quiz', 'id_quiz');
    }
    public function kursus() {
        return $this->belongsTo(Kursus::class, 'id_kursus', 'id_kursus');
    }

    public function tutor() {
        return $this->belongsTo(Tutor::class, 'id_tutor', 'id_tutor');
    }
}
