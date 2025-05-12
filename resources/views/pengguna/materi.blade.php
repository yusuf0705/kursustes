@extends('layouts.dashboard')

@section('title', 'Dashboard Kursus Bahasa')

@section('content')
    <div class="flex min-h-screen">

        <!-- Konten Utama -->
        <main class="flex-1 p-6 bg-gray-100">
            @if(session('nama'))
                <!-- Bagian Atas: Bendera dan Pengumuman hanya jika sudah mendaftar -->
                <div class="flex justify-between items-start mb-6">
                    <div class="flex items-center space-x-3">
                        <img src="{{ $flagUrl }}" 
                             alt="Flag {{ $kodeBahasa ?? 'default' }}" 
                             class="w-24 h-auto rounded shadow">
                        <h1 class="text-2xl font-bold mb-4">
                            Materi Bahasa: {{ strtoupper($kodeBahasa ?? 'Belum Dipilih') }}
                        </h1>
                    </div>
                    <div class="bg-gray-300 p-6 rounded-lg shadow text-xl font-bold text-center">
                        Info jadwal &<br>Pengumuman
                    </div>
                </div>

                <!-- Daftar Materi hanya ditampilkan jika sudah mendaftar -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h1 class="text-2xl font-bold mb-4">Materi Bahasa: {{ strtoupper($kodeBahasa ?? 'Belum Dipilih') }}</h1>
                    
                    @if(!empty($materi) && count($materi) > 0)
                        <ul class="space-y-4">
                            @foreach($materi as $item)
                                <li class="bg-gray-100 p-4 rounded-lg shadow-sm">
                                    <h3 class="text-lg font-semibold">{{ $item['judul'] }}</h3>
                                    <p class="text-gray-600">{{ $item['deskripsi'] }}</p>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p class="text-gray-600">Tidak ada materi untuk bahasa ini.</p>
                        <a href="{{ route('pendaftaran.create', ['harga' => 300000]) }}"
                           class="bg-purple-700 text-white px-4 py-2 rounded hover:bg-purple-800 text-center w-full block">
                            Mulai Daftar
                        </a>
                    @endif
                </div>
            @else
                <!-- Hanya Form Pendaftaran jika belum mendaftar -->
                <div class="mt-8 bg-white p-6 rounded-lg shadow-lg max-w-md mx-auto">
                    <h2 class="text-2xl font-bold mb-6 text-center text-purple-800">Pendaftaran Kursus Bahasa</h2>
                    <p class="text-gray-600 mb-6 text-center">Untuk mengakses materi, silakan mendaftar terlebih dahulu</p>
                    <a href="{{ route('pendaftaran.create', ['harga' => 300000]) }}"
                       class="bg-purple-700 text-white px-4 py-2 rounded hover:bg-purple-800 text-center w-full block">
                        Daftar
                    </a>
                </div>
            @endif
        </main>
    </div>
@endsection
