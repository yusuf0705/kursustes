@extends('layouts.dashboardadmin')

@section('content')
<div class="max-w-5xl mx-auto mt-10 p-6 bg-white shadow rounded-lg">
    <h1 class="text-2xl font-bold mb-4">Buat Quiz Baru</h1>

    <form action="{{ route('quiz.store') }}" method="POST" class="space-y-6">
        @csrf

        <div class="mb-4">
    <label for="id_kursus" class="block font-medium">Pilih Kursus</label>
    <select name="id_kursus" class="w-full border px-3 py-2 rounded" required>
        @foreach($kursusList as $kursus)
            <option value="{{ $kursus->id_kursus }}">{{ $kursus->kode_bahasa }}</option>
        @endforeach
    </select>
</div>

        
        <div>
            <label class="block text-sm font-semibold">Judul Quiz</label>
            <input type="text" name="judul" class="w-full border rounded p-2" required>
        </div>

        <div>
            <label class="block text-sm font-semibold">Kode Bahasa</label>
            <select name="kode_bahasa" class="w-full border rounded p-2" required>
                <option value="">-- Pilih Bahasa --</option>
                <option value="English">English</option>
                <option value="Jepang">Jepang</option>
                <option value="Mandarin">Mandarin</option>
                <option value="Korea">Korea</option>
                <option value="Spanyol">Spanyol</option>
                <option value="Jerman">Jerman</option>
            </select>
        </div>

        <div>
            <label class="block text-sm font-semibold">ID Tutor</label>
            <input type="number" name="id_tutor" class="w-full border rounded p-2" required>
        </div>

        <hr>

        <h2 class="text-lg font-bold mt-6 mb-2">10 Soal</h2>

        @for ($i = 0; $i < 10; $i++)
        <div class="border p-4 rounded mb-4">
            <p class="font-semibold mb-2">Soal {{ $i + 1 }}</p>
            <div class="mb-2">
                <label>Pertanyaan</label>
                <input type="text" name="questions[{{ $i }}][pertanyaan]" class="w-full border rounded p-2" required>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label>Opsi A</label>
                    <input type="text" name="questions[{{ $i }}][opsi_A]" class="w-full border rounded p-2" required>
                </div>
                <div>
                    <label>Opsi B</label>
                    <input type="text" name="questions[{{ $i }}][opsi_B]" class="w-full border rounded p-2" required>
                </div>
                <div>
                    <label>Opsi C</label>
                    <input type="text" name="questions[{{ $i }}][opsi_C]" class="w-full border rounded p-2" required>
                </div>
                <div>
                    <label>Opsi D</label>
                    <input type="text" name="questions[{{ $i }}][opsi_D]" class="w-full border rounded p-2" required>
                </div>
            </div>
            <div class="mt-3">
                <label class="block font-medium">Jawaban Benar:</label>
                <select name="questions[{{ $i }}][jawaban]" class="w-full border px-3 py-2 rounded" required>
                    <option value="">Pilih Jawaban</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
            </div>
        </div>
        @endfor

        <div class="text-right">
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Simpan Quiz</button>
        </div>
    </form>
</div>
@endsection
