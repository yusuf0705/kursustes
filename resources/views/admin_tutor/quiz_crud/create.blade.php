@extends('layouts.dashboardadmin')

@section('content')
<div class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow mt-10">

    <h2 class="text-2xl font-semibold mb-6 text-gray-800">Tambah Quiz</h2>

    <form action="{{ route('quiz.store') }}" method="POST" class="space-y-6">
        @csrf

        <div>
            <label for="id_kursus" class="block mb-2 text-sm font-medium text-gray-700">ID Kursus</label>
            <input type="text" id="id_kursus" name="id_kursus" value="{{ old('id_kursus') }}" required
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="Masukkan ID Kursus">
            @error('id_kursus')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="id_tutor" class="block mb-2 text-sm font-medium text-gray-700">ID Tutor</label>
            <input type="text" id="id_tutor" name="id_tutor" value="{{ old('id_tutor') }}" required
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="Masukkan ID Tutor">
            @error('id_tutor')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="pertanyaan" class="block mb-2 text-sm font-medium text-gray-700">Pertanyaan</label>
            <textarea id="pertanyaan" name="pertanyaan" rows="3" required
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                placeholder="Tulis pertanyaan di sini...">{{ old('pertanyaan') }}</textarea>
            @error('pertanyaan')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label for="opsi_A" class="block mb-2 text-sm font-medium text-gray-700">Opsi A</label>
                <input type="text" id="opsi_A" name="opsi_A" value="{{ old('opsi_A') }}" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Opsi A">
                @error('opsi_A')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="opsi_B" class="block mb-2 text-sm font-medium text-gray-700">Opsi B</label>
                <input type="text" id="opsi_B" name="opsi_B" value="{{ old('opsi_B') }}" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Opsi B">
                @error('opsi_B')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="opsi_C" class="block mb-2 text-sm font-medium text-gray-700">Opsi C</label>
                <input type="text" id="opsi_C" name="opsi_C" value="{{ old('opsi_C') }}" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Opsi C">
                @error('opsi_C')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="opsi_D" class="block mb-2 text-sm font-medium text-gray-700">Opsi D</label>
                <input type="text" id="opsi_D" name="opsi_D" value="{{ old('opsi_D') }}" required
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Opsi D">
                @error('opsi_D')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div>
            <label for="jawaban" class="block mb-2 text-sm font-medium text-gray-700">Jawaban Benar</label>
            <select id="jawaban" name="jawaban" required
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option value="" disabled selected>-- Pilih Jawaban Benar --</option>
                <option value="A" {{ old('jawaban') == 'A' ? 'selected' : '' }}>A</option>
                <option value="B" {{ old('jawaban') == 'B' ? 'selected' : '' }}>B</option>
                <option value="C" {{ old('jawaban') == 'C' ? 'selected' : '' }}>C</option>
                <option value="D" {{ old('jawaban') == 'D' ? 'selected' : '' }}>D</option>
            </select>
            @error('jawaban')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex justify-end gap-3 pt-4">
            <a href="{{ route('quiz.index') }}"
                class="px-5 py-2 text-gray-700 bg-gray-200 rounded-lg hover:bg-gray-300 transition">Batal</a>
            <button type="submit"
                class="px-5 py-2 text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition">Simpan</button>
        </div>
    </form>
</div>
@endsection
