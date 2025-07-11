@extends('layouts.dashboard')

@section('content')
<div class="max-w-3xl mx-auto p-6 bg-gray-50 border border-gray-300">
    <h1 class="text-2xl font-bold mb-4">Quiz: {{ $quiz->judul }}</h1>

    <form action="#" method="POST">
        @csrf
        @foreach($quiz->questions as $index => $q)
        <div class="mb-6  bg-gray-50 border border-gray-300 ">
            <p class="font-semibold">{{ $index + 1 }}. {{ $q->pertanyaan }}</p>
            <div class="space-y-1 ml-4">
                <label><input type="radio" name="answers[{{ $q->id_question }}]" value="A"> {{ $q->opsi_A }}</label><br>
                <label><input type="radio" name="answers[{{ $q->id_question }}]" value="B"> {{ $q->opsi_B }}</label><br>
                <label><input type="radio" name="answers[{{ $q->id_question }}]" value="C"> {{ $q->opsi_C }}</label><br>
                <label><input type="radio" name="answers[{{ $q->id_question }}]" value="D"> {{ $q->opsi_D }}</label>
            </div>
        </div>
        @endforeach

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Selesai</button>
    </form>
</div>
@endsection
