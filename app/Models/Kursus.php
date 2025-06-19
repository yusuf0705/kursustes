<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kursus extends Model
{
    use HasFactory;

    protected $table = 'kursus'; // sesuaikan jika nama tabel berbeda
    protected $primaryKey = 'id_kursus'; // sesuaikan dengan struktur tabelmu

    protected $fillable = [
        'nama_kursus',
        'deskripsi',
        'kategori',
        // tambah kolom lain jika ada
    ];

    public function quizzes()
    {
        return $this->hasMany(Quiz::class, 'id_kursus', 'id_kursus');
    }
}
