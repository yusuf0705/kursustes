<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kursus;
use App\Models\Tutor;

class Quiz extends Model
{
    use HasFactory;

    protected $table = 'quizzes';
    protected $primaryKey = 'id'; // atau 'id_quiz' kalau di DB kamu pakai itu

    protected $fillable = [
        'id_kursus',
        'id_tutor',
        'pertanyaan',
        'opsi_A',
        'opsi_B',
        'opsi_C',
        'opsi_D',
        'jawaban'
    ];

    public function kursus()
    {
        return $this->belongsTo(Kursus::class, 'id_kursus', 'id_kursus');
    }

    public function tutor()
    {
        return $this->belongsTo(Tutor::class, 'id_tutor', 'id');
    }
}
