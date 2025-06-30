<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kursus;
use App\Models\TutorMateri;
use App\Models\Quiz;

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

public function show($kode_bahasa)
{
    $kursus = Kursus::where('kode_bahasa', $kode_bahasa)->firstOrFail();

    // Ambil materi yang sesuai dengan kursus
    $materiList = TutorMateri::where('id_kursus', $kursus->id_kursus)->get();
        $quiz = Quiz::where('id_kursus', $kursus->id_kursus)->first(); // jika ada quiz
    $quizzes = Quiz::where('id_kursus', $kursus->id_kursus)->get(); // ambil quiz untuk kursus ini
    return view('pengguna.materi', compact('kursus', 'materiList', 'quizzes'));

}


}
