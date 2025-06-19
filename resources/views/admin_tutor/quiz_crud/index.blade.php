@extends('layouts.dashboardadmin')

@section('content')

<!-- Main Content -->
<div class="flex-1 flex flex-col text-center">
    <!-- Header -->
    <header class="bg-white p-4 shadow">
        <div class="container mx-auto">
            <h1 class="text-xl font-semibold text-gray-800">Daftar Quiz</h1>
        </div>
    </header>

    <div class="container mx-auto mt-4 flex justify-end px-4">
        <a href="{{ route('quiz.create') }}"
           class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded text-sm shadow">
            + Tambah Quiz
        </a>
    </div>

    <div class="overflow-x-auto m-4">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <table class="min-w-full table-auto border border-gray-300">
                <thead class="bg-gray-700 text-white">
                    <tr>
                        <th class="border border-gray-300 px-6 py-3 text-sm font-semibold uppercase">No</th>
                        <th class="border border-gray-300 px-6 py-3 text-sm font-semibold uppercase">ID Kursus</th>
                        <th class="border border-gray-300 px-6 py-3 text-sm font-semibold uppercase">ID Tutor</th>
                        <th class="border border-gray-300 px-6 py-3 text-sm font-semibold uppercase">Pertanyaan</th>
                        <th class="border border-gray-300 px-6 py-3 text-sm font-semibold uppercase">Jawaban Benar</th>
                        <th class="border border-gray-300 px-6 py-3 text-sm font-semibold uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @forelse ($quizzes as $index => $quiz)
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-6 py-4">{{ $index + 1 }}</td>
                        <td class="border border-gray-300 px-6 py-4">{{ $quiz->id_kursus }}</td>
                        <td class="border border-gray-300 px-6 py-4">{{ $quiz->id_tutor }}</td>
                        <td class="border border-gray-300 px-6 py-4">{{ \Illuminate\Support\Str::limit($quiz->pertanyaan, 50) }}</td>
                        <td class="border border-gray-300 px-6 py-4 font-semibold">{{ $quiz->jawaban }}</td>
                        <td class="border border-gray-300 px-6 py-4 space-x-2">
                            <a href="{{ route('quiz.edit', $quiz->id) }}"
                               class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm">
                               Edit
                            </a>
                            <form action="{{ route('quiz.destroy', $quiz->id) }}" method="POST" class="inline"
                                  onsubmit="return confirm('Yakin hapus quiz ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded text-sm">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="border border-gray-300 px-6 py-4 text-center text-gray-500">
                            Belum ada quiz.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
