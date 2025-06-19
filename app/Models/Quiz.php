<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $table = 'quizzes';

    // Hapus ini jika primary key default-nya 'id'
    // Hanya aktifkan jika kolomnya memang BUKAN 'id'
    protected $primaryKey = 'id'; // default Laravel

    // Jika ID bukan auto-increment, uncomment ini:
    // public $incrementing = false;

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

    // (Opsional) Relasi ke model Kursus
    public function kursus()
    {
        return $this->belongsTo(Kursus::class, 'id_kursus', 'id_kursus');
    }

    // (Opsional) Relasi ke model Tutor
    public function tutor()
    {
        return $this->belongsTo(Tutor::class, 'id_tutor', 'id');
    }
}
