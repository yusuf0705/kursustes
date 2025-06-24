
@extends('layouts.dashboard')

@section('title', 'Materi ' . ucfirst($kursus->kode_bahasa))

@section('content')
<main class="p-6">
    <h1 class="text-2xl font-bold mb-4">Materi Kursus: {{ ucfirst($kursus->kode_bahasa) }}</h1>

    @if($kursus->jadwal && $kursus->jadwal->count())
        <ul class="list-disc pl-5">
            @foreach($kursus->jadwal as $jadwal)
                <li>{{ ucfirst($jadwal->hari) }}: {{ $jadwal->jam_mulai }} - {{ $jadwal->jam_selesai }}</li>
            @endforeach
        </ul>
    @else
        <p class="text-gray-600">Jadwal belum tersedia.</p>
    @endif
</main>
@endsection
