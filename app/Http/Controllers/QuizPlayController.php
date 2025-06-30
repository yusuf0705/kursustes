<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\QuizQuestion;
use Illuminate\Http\Request;

class QuizPlayController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::all();
        return view('pelajar.quiz.index', compact('quizzes'));
    }

    public function start($id)
    {
        $quiz = Quiz::with('questions')->findOrFail($id);
        return view('pelajar.quiz.play', compact('quiz'));
    }

    public function submit(Request $request, $id)
    {
        $quiz = Quiz::with('questions')->findOrFail($id);
        $score = 0;

        foreach ($quiz->questions as $q) {
            if (isset($request->answers[$q->id_question]) && $request->answers[$q->id_question] == $q->jawaban) {
                $score++;
            }
        }

        return redirect()->route('quiz.play.result', ['id' => $quiz->id_quiz])
                         ->with(['score' => $score, 'total' => count($quiz->questions)]);
    }

    public function result($id)
{
    $quiz = Quiz::with('questions')->findOrFail($id);
    return view('pengguna.quizresult', compact('quiz'));
}


}
