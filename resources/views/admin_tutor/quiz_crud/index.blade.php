@extends('layouts.dashboardadmin')

@section('content')
<!-- Main Content -->
<div class="flex-1 flex flex-col text-center">
    <!-- Header -->
    <header class="bg-white p-4 shadow">
        <div class="container mx-auto">
            <h1 class="text-xl font-semibold text-gray-800">Manajemen Quiz</h1>
        </div>
    </header>

    <!-- Tombol Tambah -->
    <div class="container mx-auto mt-4 flex justify-end px-4">
        <a href="{{ route('quiz.create') }}" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded text-sm shadow">
            + Tambah Quiz
        </a>
    </div>

    <!-- Tabel -->
    <div class="overflow-x-auto m-4">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <table class="min-w-full table-auto border border-gray-300">
                <thead class="bg-gray-700 text-white">
                    <tr>
                        <th class="border px-6 py-3 text-sm uppercase">No</th>
                        <th class="border px-6 py-3 text-sm uppercase">Judul</th>
                        <th class="border px-6 py-3 text-sm uppercase">Bahasa</th>
                        <th class="border px-6 py-3 text-sm uppercase">Jumlah Soal</th>
                        <th class="border px-6 py-3 text-sm uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @forelse ($quizzes as $index => $quiz)
                        <tr class="hover:bg-gray-50">
                            <td class="border px-6 py-4">{{ $index + 1 }}</td>
                            <td class="border px-6 py-4">{{ $quiz->judul }}</td>
                            <td class="border px-6 py-4">{{ $quiz->kode_bahasa }}</td>
                            <td class="border px-6 py-4">{{ $quiz->questions_count ?? 0 }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="border px-6 py-4 text-center text-gray-500">Belum ada quiz.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
