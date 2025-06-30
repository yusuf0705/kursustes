
@extends('layouts.dashboard')

@section('title', 'Materi ' . ucfirst($kursus->kode_bahasa))

@section('content')
<main class="p-6">
    <h1 class="text-2xl font-bold mb-4">Materi Kursus: {{ ucfirst($kursus->kode_bahasa) }}</h1>

    @if($kursus->jadwal && $kursus->jadwal->count())
    @foreach($kursus->jadwal as $jadwal)
        <li>{{ ucfirst($jadwal->hari) }}: {{ $jadwal->jam_mulai }} - {{ $jadwal->jam_selesai }}</li>
    @endforeach
@else
    <p class="text-gray-600">Jadwal belum tersedia.</p>
@endif
 <!-- Daftar Materi -->
     @if ($materiList->isEmpty())
        <p class="text-gray-600">Belum ada materi tersedia.</p>
    @else
        <div class="space-y-4">
            @foreach ($materiList as $index => $materi)
                <div class="bg-gray-100 p-4 rounded-lg">
                    <h2 class="text-lg font-bold">Materi {{ $index + 1 }}</h2>
                    <p class="text-gray-700">{{ $materi->judul }}</p>
                    <p class="text-sm text-gray-500">{{ \Illuminate\Support\Str::limit($materi->isi_materi, 100) }}</p>
                    @if ($materi->file_path)
                        <a href="{{ asset($materi->file_path) }}" target="_blank" class="text-blue-600 underline mt-2 block">Lihat File</a>
                    @endif
                </div>
            @endforeach

            <div class="max-w-3xl mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Daftar Quiz</h1>

    <ul class="space-y-4">
        @foreach($quizzes as $quiz)
        <li class="bg-white shadow p-4 rounded">
            <div class="flex justify-between items-center">
                <div>
                    <h2 class="font-semibold">{{ $quiz->judul }}</h2>
                    <p class="text-sm text-gray-500">Bahasa: {{ $quiz->kode_bahasa }}</p>
                </div>
                <a href="{{ route('quiz.play.start', $quiz->id_quiz) }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Mulai Quiz
                </a>
            </div>
        </li>
        @endforeach
    </ul>
</div>
        </div>
    @endif
</main>
@endsection
