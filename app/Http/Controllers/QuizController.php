<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use App\Models\Quiz;
use App\Models\QuizQuestion;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    // Halaman daftar semua quiz
    public function index()
    {
        $quizzes = Quiz::withCount('questions')->get();
        return view('admin_tutor.quiz_crud.index', compact('quizzes'));
    }

    // Form tambah quiz dan 10 soal sekaligus
  public function create()
{
    $kursusList = Kursus::all(); // Ambil semua kursus
    return view('admin_tutor.quiz_crud.create', compact('kursusList')); // Kirim ke view
}

    // Simpan quiz dan soalnya
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string',
            'kode_bahasa' => 'required|string',
            'id_tutor' => 'required|integer',
            'id_kursus' => 'required|exists:kursus,id_kursus',
            'questions' => 'required|array|size:10',
            'questions.*.pertanyaan' => 'required|string',
            'questions.*.opsi_A' => 'required|string',
            'questions.*.opsi_B' => 'required|string',
            'questions.*.opsi_C' => 'required|string',
            'questions.*.opsi_D' => 'required|string',
            'questions.*.jawaban' => 'required|in:A,B,C,D',
        ]);

        $quiz = Quiz::create([
            'judul' => $request->judul,
            'kode_bahasa' => $request->kode_bahasa,
            'id_tutor' => $request->id_tutor,
            'id_kursus' => $request->id_kursus, // <-- ini wajib kalau field ada

        ]);

        foreach ($request->questions as $q) {
            $q['id_quiz'] = $quiz->id_quiz;
            QuizQuestion::create($q);
        }

return redirect()->route('quiz.index')->with('success', 'Quiz berhasil ditambahkan.');
    }
}
