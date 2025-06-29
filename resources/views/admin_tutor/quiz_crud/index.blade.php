@extends('layouts.dashboardadmin') {{-- Ganti jika kamu pakai layout lain --}}

@section('content')
<div class="max-w-5xl mx-auto mt-10 p-6 bg-white shadow rounded-lg">
    <h1 class="text-2xl font-bold mb-4">Daftar Quiz</h1>

    <a href="{{ route('quiz.create') }}"
       class="inline-block mb-4 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
        + Buat Quiz
    </a>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 p-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full border text-left">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-2 border">Judul</th>
                <th class="p-2 border">Bahasa</th>
                <th class="p-2 border">Jumlah Soal</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($quizzes as $quiz)
            <tr>
                <td class="p-2 border">{{ $quiz->judul }}</td>
                <td class="p-2 border">{{ $quiz->kode_bahasa }}</td>
                <td class="p-2 border">{{ $quiz->questions_count }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="3" class="text-center p-2">Belum ada quiz.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection

<!-- @extends('layouts.dashboardadmin')

@section('content')
<div class="max-w-4xl mx-auto p-6 bg-white rounded shadow mt-10">
    <h2 class="text-2xl font-bold mb-6">Daftar Quiz</h2>

    <a href="{{ route('quiz.create') }}" class="bg-green-600 text-white px-4 py-2 rounded mb-4 inline-block">+ Buat Quiz</a>

    <table class="w-full table-auto border">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">Judul</th>
                <th class="px-4 py-2">Bahasa</th>
                <th class="px-4 py-2">Jumlah Soal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($quizzes as $quiz)
            <tr class="text-center">
                <td class="border px-4 py-2">{{ $quiz->judul }}</td>
                <td class="border px-4 py-2">{{ $quiz->kode_bahasa }}</td>
                <td class="border px-4 py-2">{{ $quiz->questions_count }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection -->
