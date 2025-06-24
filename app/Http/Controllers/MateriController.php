<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kursus;

class MateriController extends Controller
{
    public function index($kode_bahasa)
    {
        $kursus = Kursus::where('kode_bahasa', $kode_bahasa)->first();

        if (!$kursus) {
            return redirect()->route('kursus.index')->with('error', 'Kursus tidak ditemukan.');
        }

        return view('pengguna.materi', compact('kursus'));
    }
    public function materi($id)
{
    $kursus = Kursus::with('jadwal')->findOrFail($id); // pastikan ada relasi 'jadwal'
    return view('pengguna.materi', compact('kursus'));
}

}
