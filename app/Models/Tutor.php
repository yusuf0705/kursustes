<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;

    protected $table = 'tutor';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'spesialisasi',
        // tambah kolom lain jika ada
    ];

    public function quizzes()
    {
        return $this->hasMany(Quiz::class, 'id_tutor', 'id');
    }
}
