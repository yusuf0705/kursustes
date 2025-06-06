<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
     use HasFactory;

    protected $table = 'quiz';
    protected $primaryKey = 'id_quiz';

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
}
