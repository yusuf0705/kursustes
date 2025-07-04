<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pendaftaran;

class Pembayaran extends Model
{
    protected $table = 'pembayaran';
    protected $primaryKey = 'id_pembayaran';
    public $timestamps = true;

    protected $fillable = [
        'id_pendaftaran',
        'tanggal_bayar',
        'status',
        'metode_pembayaran',
        'bukti'
    ];
    public function pelajar()
{
    return $this->belongsTo(Pelajar::class, 'id_pelajar', 'id_pelajar');
}
public function kursus()
{
    return $this->belongsTo(Kursus::class, 'id_kursus', 'id_kursus');
}

public function pendaftaran()
{
    return $this->belongsTo(Pendaftaran::class, 'id_pendaftaran', 'id_pendaftaran');
}



}
