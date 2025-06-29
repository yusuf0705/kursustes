<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutormateri extends Model
{
    use HasFactory;

    protected $table = 'materi'; // sesuaikan dengan nama tabel
    protected $primaryKey = 'id_materi';
    protected $fillable = [
        'id_kursus',
        'id_tutor',
        'judul',
        'isi_materi',
        'file_path',
    ];


    public function kursus()
{
    return $this->belongsTo(Kursus::class, 'kode_bahasa', 'kode_bahasa');
}


    public function tutor()
    {
        return $this->belongsTo(Tutor::class, 'id_tutor','id_tutor');
    }

}
