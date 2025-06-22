<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::all();
        return view('admin_tutor.quiz_crud.index', compact('quizzes'));
    }

    public function create()
    {
        return view('admin_tutor.quiz_crud.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_kursus' => 'required|exists:kursus,id_kursus', // foreign key check
            'id_tutor' => 'required|exists:tutor,id', // foreign key check
            'pertanyaan' => 'required|string',
            'opsi_A' => 'required|string',
            'opsi_B' => 'required|string',
            'opsi_C' => 'required|string',
            'opsi_D' => 'required|string',
            'jawaban' => 'required|in:A,B,C,D',
        ]);

        Quiz::create($validated);

        return redirect()->route('quiz.index')->with('success', 'Quiz berhasil ditambahkan.');
    }

    public function edit(Quiz $quiz)
    {
        return view('admin_tutor.quiz_crud.edit', compact('quiz'));
    }

    public function update(Request $request, Quiz $quiz)
    {
        $validated = $request->validate([
            'id_kursus' => 'required|exists:kursus,id_kursus',
            'id_tutor' => 'required|exists:tutor,id',
            'pertanyaan' => 'required|string',
            'opsi_A' => 'required|string',
            'opsi_B' => 'required|string',
            'opsi_C' => 'required|string',
            'opsi_D' => 'required|string',
            'jawaban' => 'required|in:A,B,C,D',
        ]);

        $quiz->update($validated);

        return redirect()->route('quiz.index')->with('success', 'Quiz berhasil diupdate.');
    }

    public function destroy(Quiz $quiz)
    {
        $quiz->delete();
        return redirect()->route('quiz.index')->with('success', 'Quiz berhasil dihapus.');
    }
}
