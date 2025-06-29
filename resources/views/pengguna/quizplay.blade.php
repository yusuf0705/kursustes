@extends('layouts.dashboard')

@section('content')
<div class="p-6">
    <h2 class="text-xl font-semibold mb-4">Pilih Quiz</h2>
    <ul>
        @foreach($quizzes as $quiz)
            <li class="mb-2">
                <a href="{{ route('quiz.play.start', $quiz->id_quiz) }}" class="text-blue-600 hover:underline">
                    {{ $quiz->judul }} - {{ $quiz->kode_bahasa }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
@endsection
