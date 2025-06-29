<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\QuizQuestion;
use Illuminate\Http\Request;

class QuizPlayController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::all(); // tampilkan daftar quiz untuk pelajar
        return view('quiz.play.index', compact('quizzes'));
    }

    public function start($id_quiz)
    {
        $quiz = Quiz::with('questions')->findOrFail($id_quiz);
        return view('quiz.play.start', compact('quiz'));
    }

    public function submit(Request $request, $id_quiz)
    {
        $quiz = Quiz::with('questions')->findOrFail($id_quiz);
        $questions = $quiz->questions;

        $score = 0;
        $total = count($questions);
        $answers = [];

        foreach ($questions as $question) {
            $answer = $request->input('answer_' . $question->id_question);
            $isCorrect = $answer === $question->jawaban;
            if ($isCorrect) {
                $score++;
            }

            $answers[] = [
                'question' => $question->pertanyaan,
                'your_answer' => $answer,
                'correct_answer' => $question->jawaban,
                'is_correct' => $isCorrect,
            ];
        }

        return view('quiz.play.result', compact('quiz', 'score', 'total', 'answers'));
    }
}
