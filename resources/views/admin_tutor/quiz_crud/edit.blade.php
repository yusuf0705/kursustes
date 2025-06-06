@extends('layouts.dashboardadmin')

@section('content')
<div class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow mt-10">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Edit Quiz</h2>

    <form action="{{ route('quiz.update', $quiz) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="id_kursus" class="block text-gray-700 font-medium mb-1">ID Kursus</label>
            <input type="number" name="id_kursus" id="id_kursus" value="{{ old('id_kursus', $quiz->id_kursus) }}"
                   class="w-full border border-gray-300 rounded px-3 py-2 @error('id_kursus') border-red-500 @enderror" required>
            @error('id_kursus')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="id_tutor" class="block text-gray-700 font-medium mb-1">ID Tutor</label>
            <input type="number" name="id_tutor" id="id_tutor" value="{{ old('id_tutor', $quiz->id_tutor) }}"
                   class="w-full border border-gray-300 rounded px-3 py-2 @error('id_tutor') border-red-500 @enderror" required>
            @error('id_tutor')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="pertanyaan" class="block text-gray-700 font-medium mb-1">Pertanyaan</label>
            <textarea name="pertanyaan" id="pertanyaan" rows="3"
                      class="w-full border border-gray-300 rounded px-3 py-2 @error('pertanyaan') border-red-500 @enderror"
                      required>{{ old('pertanyaan', $quiz->pertanyaan) }}</textarea>
            @error('pertanyaan')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="opsi_A" class="block text-gray-700 font-medium mb-1">Opsi A</label>
            <input type="text" name="opsi_A" id="opsi_A" value="{{ old('opsi_A', $quiz->opsi_A) }}"
                   class="w-full border border-gray-300 rounded px-3 py-2 @error('opsi_A') border-red-500 @enderror" required>
            @error('opsi_A')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="opsi_B" class="block text-gray-700 font-medium mb-1">Opsi B</label>
            <input type="text" name="opsi_B" id="opsi_B" value="{{ old('opsi_B', $quiz->opsi_B) }}"
                   class="w-full border border-gray-300 rounded px-3 py-2 @error('opsi_B') border-red-500 @enderror" required>
            @error('opsi_B')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="opsi_C" class="block text-gray-700 font-medium mb-1">Opsi C</label>
            <input type="text" name="opsi_C" id="opsi_C" value="{{ old('opsi_C', $quiz->opsi_C) }}"
                   class="w-full border border-gray-300 rounded px-3 py-2 @error('opsi_C') border-red-500 @enderror" required>
            @error('opsi_C')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="opsi_D" class="block text-gray-700 font-medium mb-1">Opsi D</label>
            <input type="text" name="opsi_D" id="opsi_D" value="{{ old('opsi_D', $quiz->opsi_D) }}"
                   class="w-full border border-gray-300 rounded px-3 py-2 @error('opsi_D') border-red-500 @enderror" required>
            @error('opsi_D')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="jawaban" class="block text-gray-700 font-medium mb-1">Jawaban Benar</label>
            <select name="jawaban" id="jawaban" required
                    class="w-full border border-gray-300 rounded px-3 py-2 @error('jawaban') border-red-500 @enderror">
                <option value="">-- Pilih Jawaban Benar --</option>
                <option value="A" {{ old('jawaban', $quiz->jawaban) == 'A' ? 'selected' : '' }}>A</option>
                <option value="B" {{ old('jawaban', $quiz->jawaban) == 'B' ? 'selected' : '' }}>B</option>
                <option value="C" {{ old('jawaban', $quiz->jawaban) == 'C' ? 'selected' : '' }}>C</option>
                <option value="D" {{ old('jawaban', $quiz->jawaban) == 'D' ? 'selected' : '' }}>D</option>
            </select>
            @error('jawaban')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex space-x-4">
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
                Update
            </button>
            <a href="{{ route('quiz.index') }}"
               class="bg-gray-300 text-gray-700 px-6 py-2 rounded hover:bg-gray-400 transition">
               Batal Update
            </a>
        </div>
    </form>
</div>
@endsection
