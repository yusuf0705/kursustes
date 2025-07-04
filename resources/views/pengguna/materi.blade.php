@extends('layouts.dashboard')

@section('title', 'Materi ' . ucfirst($kursus->kode_bahasa))

@section('content')
<main class="p-6">
    <h1 class="text-2xl font-bold mb-4">Materi Kursus: {{ ucfirst($kursus->kode_bahasa) }}</h1>

    <!-- Jadwal Section -->
    <div class="bg-white p-4 rounded-lg shadow mb-6">
        <h2 class="text-lg font-semibold mb-3">Jadwal Kursus</h2>
        @if($kursus->jadwal && $kursus->jadwal->count())
            <ul class="space-y-2">
                @foreach($kursus->jadwal as $jadwal)
                    <li class="flex items-center">
                        <span class="w-20 font-medium">{{ ucfirst($jadwal->hari) }}</span>
                        <span class="text-gray-600">: {{ $jadwal->jam_mulai }} - {{ $jadwal->jam_selesai }}</span>
                    </li>
                @endforeach
            </ul>
        @else
            <p class="text-gray-600">Jadwal belum tersedia.</p>
        @endif
    </div>

    <!-- Daftar Materi -->
    <div class="bg-white p-4 rounded-lg shadow mb-6">
        <h2 class="text-lg font-semibold mb-3">Daftar Materi</h2>
        @if ($materiList->isEmpty())
            <p class="text-gray-600">Belum ada materi tersedia.</p>
        @else
            <div class="space-y-4">
                @foreach ($materiList as $index => $materi)
                    <div class="bg-gray-100 p-4 rounded-lg">
                        <h3 class="text-lg font-bold">Materi {{ $index + 1 }}</h3>
                        <p class="text-gray-700 mt-2">{{ $materi->judul }}</p>
                        <p class="text-sm text-gray-500 mt-1">{{ \Illuminate\Support\Str::limit($materi->isi_materi, 100) }}</p>
                        @if ($materi->file_path)
                            <a href="{{ asset($materi->file_path) }}" target="_blank" class="text-blue-600 underline mt-2 block">Lihat File</a>
                        @endif
                    </div>
                @endforeach
            </div>
        @endif
    </div>

    <!-- Daftar Quiz -->
    <div class="bg-white p-4 rounded-lg shadow">
        <h2 class="text-lg font-semibold mb-3">Daftar Quiz</h2>
        @if(isset($quizzes) && $quizzes->count())
            <div class="space-y-4">
                @foreach($quizzes as $quiz)
                    <div class="bg-gray-50 p-4 rounded-lg border border-gray-200">
                        <div class="flex justify-between items-center">
                            <div>
                                <h3 class="font-semibold text-gray-800">{{ $quiz->judul }}</h3>
                                <p class="text-sm text-gray-500 mt-1">Bahasa: {{ $quiz->kode_bahasa }}</p>
                            </div>
                            <a href="{{ route('quiz.play.start', $quiz->id_quiz) }}" 
                               class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition-colors">
                                Mulai Quiz
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-gray-600">Belum ada quiz tersedia.</p>
        @endif
    </div>
</main>
@endsection