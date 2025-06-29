<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kursus extends Model
{
    use HasFactory;

    protected $table = 'kursus';
    protected $primaryKey = 'id_kursus';

    protected $fillable = [
        'id_tutor',
        'kode_bahasa',
    ];

    // Relasi ke Tutor
    public function tutor()
    {
        return $this->belongsTo(Tutor::class, 'id_tutor');
    }

    // Relasi ke Materi
    // public function materi()
    // {
    //     return $this->hasMany(Tutormateri::class, 'id_kursus');
    // }
    public function materi()
{
    return $this->hasMany(Tutormateri::class, 'kode_bahasa', 'kode_bahasa');
}


    // Relasi ke Quiz
 public function quizzes()
    {
        return $this->hasMany(Quiz::class, 'id_kursus', 'id_kursus');
    }

    // Relasi ke Jadwal
    public function jadwal()
{
    return $this->hasMany(Jadwal::class, 'id_kursus', 'id_kursus');
}


    // Relasi ke Pendaftaran
    public function pendaftaran()
    {
        return $this->hasMany(Pendaftaran::class, 'id_kursus');
    }
}
