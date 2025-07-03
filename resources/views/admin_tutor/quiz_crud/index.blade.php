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