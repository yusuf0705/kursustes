@extends('layouts.dashboardadmin')

@section('content')
<div class="max-w-xl mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-lg font-semibold mb-4">Tambah Kursus Baru</h2>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-3 mb-4 rounded">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('kursus.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label class="block mb-1">Tutor</label>
            <select name="id_tutor" class="w-full border p-2 rounded" required>
                <option value="">-- Pilih Tutor --</option>
                @foreach ($tutors as $tutor)
                    <option value="{{ $tutor->id_tutor }}">{{ $tutor->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block mb-1">Bahasa</label>
            <select name="kode_bahasa" class="w-full border p-2 rounded" required>
                <option value="">-- Pilih Bahasa --</option>
                @foreach (['English', 'Jepang', 'Mandarin', 'Korea', 'Spanyol', 'Jerman'] as $bahasa)
                    <option value="{{ $bahasa }}">{{ $bahasa }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Simpan</button>
        <a href="{{ route('kursus.index') }}" class="ml-2 text-gray-600 hover:underline">Batal</a>
    </form>
</div>
@endsection
