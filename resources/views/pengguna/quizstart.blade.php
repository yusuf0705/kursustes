@extends('layouts.dashboard')

@section('content')
<div class="p-6">
    <h2 class="text-xl font-semibold mb-4">Quiz: {{ $quiz->judul }}</h2>
    <form method="POST" action="{{ route('quiz.play.submit', $quiz->id_quiz) }}">
        @csrf
        @foreach($quiz->questions as $index => $q)
            <div class="mb-6">
                <p class="font-medium">{{ $index+1 }}. {{ $q->pertanyaan }}</p>
                @foreach(['A', 'B', 'C', 'D'] as $opt)
                    <label class="block">
                        <input type="radio" name="answer_{{ $q->id_question }}" value="{{ $opt }}" required>
                        {{ $q->{'opsi_'.$opt} }}
                    </label>
                @endforeach
            </div>
        @endforeach

        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Selesai</button>
    </form>
</div>
@endsection
