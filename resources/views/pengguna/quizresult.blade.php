@extends('layouts.dashboard')

@section('title', 'Hasil Quiz')

@section('content')
<div class="max-w-2xl mx-auto mt-10 bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Hasil Quiz</h1>

    <p class="text-xl">
        Skor kamu:
        <strong>
            {{ session('score') }}/{{ $quiz->questions->count() }}
        </strong>
    </p>

    <a href="{{ url('/kursus') }}" class="mt-6 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        Kembali ke Kursus
    </a>
</div>
@endsection
