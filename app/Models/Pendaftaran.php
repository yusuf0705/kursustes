<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $table = 'pendaftaran';
    protected $primaryKey = 'id_pendaftaran';
    protected $fillable = [
        'id_pelajar',
        'id_kursus',
        'nama',
        'kode_bahasa',
        'durasi',        // tambahkan ini
        'harga',
        'tanggal_daftar',
        'status',
    ];

    // public function kursus() {
    //     return $this->belongsTo(Kursus::class, 'id_kursus');
    // }

    // public function pelajar() {
    //     return $this->belongsTo(Pelajar::class, 'id_pelajar');
    // }
   public function pembayaran()
{
    return $this->hasOne(\App\Models\Pembayaran::class, 'id_pendaftaran', 'id_pendaftaran');
}

// app/Models/Pendaftaran.php

public function pelajar()
{
    return $this->belongsTo(Pelajar::class, 'id_pelajar', 'id_pelajar');
}

public function kursus()
{
    return $this->belongsTo(Kursus::class, 'id_kursus', 'id_kursus');
}

}
