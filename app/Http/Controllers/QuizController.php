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
        $request->validate([
            'id_kursus' => 'required',
            'id_tutor' => 'required',
            'pertanyaan' => 'required',
            'opsi_A' => 'required',
            'opsi_B' => 'required',
            'opsi_C' => 'required',
            'opsi_D' => 'required',
            'jawaban' => 'required|in:A,B,C,D',
        ]);

        Quiz::create($request->all());

        return redirect()->route('quiz.index')->with('success', 'Quiz berhasil ditambahkan.');
    }

    public function edit(Quiz $quiz) // GUNAKAN model binding
    {
        return view('admin_tutor.quiz_crud.edit', compact('quiz'));
    }

    public function update(Request $request, Quiz $quiz) // GUNAKAN model binding
    {
        $request->validate([
            'id_kursus' => 'required',
            'id_tutor' => 'required',
            'pertanyaan' => 'required',
            'opsi_A' => 'required',
            'opsi_B' => 'required',
            'opsi_C' => 'required',
            'opsi_D' => 'required',
            'jawaban' => 'required|in:A,B,C,D',
        ]);

        $quiz->update($request->all());

        return redirect()->route('quiz.index')->with('success', 'Quiz berhasil diupdate.');
    }

    public function destroy(Quiz $quiz) // GUNAKAN model binding
    {
        $quiz->delete();
        return redirect()->route('quiz.index')->with('success', 'Quiz berhasil dihapus.');
    }
}
