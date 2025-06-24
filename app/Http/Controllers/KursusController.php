<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pendaftaran;
use App\Models\Kursus;
use App\Models\Pelajar;

class KursusController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $semuaKursus = Kursus::all();
        $kursusDiambil = collect(); // default empty

        $pelajar = Pelajar::where('user_id', $user->id)->first();

        if ($pelajar) {
            $pendaftarans = Pendaftaran::with('kursus')
                ->where('id_pelajar', $pelajar->id_pelajar)
                ->get();

            $kursusDiambil = $pendaftarans->pluck('kursus');
        }

        return view('pengguna.kursus', [
            'semuaKursus' => $semuaKursus,
            'kursusDiambil' => $kursusDiambil
        ]);
    }
    public function materiByKode($kode_bahasa) {
    $kursus = Kursus::where('kode_bahasa', $kode_bahasa)->with('jadwal')->firstOrFail();
    return view('pengguna.materi', compact('kursus'));
}

}
