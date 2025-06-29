@extends('layouts.dashboard')

@section('content')
<div class="p-6">
    <h2 class="text-xl font-semibold mb-4">Hasil Quiz: {{ $quiz->judul }}</h2>
    <p class="mb-4">Nilai kamu: <strong>{{ $score }}/{{ $total }}</strong></p>

    <div class="space-y-4">
        @foreach($answers as $index => $answer)
            <div class="p-4 border rounded {{ $answer['is_correct'] ? 'bg-green-100' : 'bg-red-100' }}">
                <p><strong>{{ $index + 1 }}. {{ $answer['question'] }}</strong></p>
                <p>Jawaban Kamu: {{ $answer['your_answer'] ?? 'Tidak dijawab' }}</p>
                <p>Jawaban Benar: {{ $answer['correct_answer'] }}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection
