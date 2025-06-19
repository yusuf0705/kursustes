@extends('layouts.dashboardadmin')

@section('content')
<div class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow mt-10">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Edit Quiz</h2>

    <form action="{{ route('quiz.update', $quiz->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="id_kursus" class="block text-gray-700 font-medium mb-1">ID Kursus</label>
            <input type="text" name="id_kursus" id="id_kursus" value="{{ old('id_kursus', $quiz->id_kursus) }}"
                class="w-full border border-gray-300 rounded px-3 py-2" required>
        </div>

        <div class="mb-4">
            <label for="id_tutor" class="block text-gray-700 font-medium mb-1">ID Tutor</label>
            <input type="text" name="id_tutor" id="id_tutor" value="{{ old('id_tutor', $quiz->id_tutor) }}"
                class="w-full border border-gray-300 rounded px-3 py-2" required>
        </div>

        <div class="mb-4">
            <label for="pertanyaan" class="block text-gray-700 font-medium mb-1">Pertanyaan</label>
            <textarea name="pertanyaan" id="pertanyaan" rows="3"
                class="w-full border border-gray-300 rounded px-3 py-2" required>{{ old('pertanyaan', $quiz->pertanyaan) }}</textarea>
        </div>

        @foreach (['a', 'b', 'c', 'd'] as $opt)
        <div class="mb-4">
            <label for="opsi_{{ $opt }}" class="block text-gray-700 font-medium mb-1">Opsi {{ strtoupper($opt) }}</label>
            <input type="text" name="opsi_{{ $opt }}" id="opsi_{{ $opt }}" value="{{ old('opsi_'.$opt, $quiz->{'opsi_'.$opt}) }}"
                class="w-full border border-gray-300 rounded px-3 py-2" required>
        </div>
        @endforeach

        <div class="mb-6">
            <label for="jawaban" class="block text-gray-700 font-medium mb-1">Jawaban Benar</label>
            <select name="jawaban" id="jawaban" class="w-full border border-gray-300 rounded px-3 py-2" required>
                @foreach(['A','B','C','D'] as $val)
                    <option value="{{ $val }}" {{ old('jawaban', $quiz->jawaban) == $val ? 'selected' : '' }}>{{ $val }}</option>
                @endforeach
            </select>
        </div>

        <div class="flex space-x-4">
            <button type="submit" class="bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700">Update</button>
            <a href="{{ route('quiz.index') }}"
               class="bg-gray-300 text-gray-800 px-5 py-2 rounded hover:bg-gray-400">Batal</a>
        </div>
    </form>
</div>
@endsection
