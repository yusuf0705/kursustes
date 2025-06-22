@extends('layouts.dashboardadmin')

@section('content')
<div class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow mt-10">
    <h2 class="text-2xl font-semibold mb-6 text-gray-800">Tambah Jadwal</h2>

    <form action="{{ route('jadwal.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label class="block mb-1 text-sm text-gray-700">ID Kursus</label>
            <input type="number" name="id_kursus" value="{{ old('id_kursus') }}" required class="w-full border border-gray-300 rounded px-3 py-2">
        </div>

        <div>
            <label class="block mb-1 text-sm text-gray-700">ID Tutor</label>
            <input type="number" name="id_tutor" value="{{ old('id_tutor') }}" required class="w-full border border-gray-300 rounded px-3 py-2">
        </div>

        <div>
            <label class="block mb-1 text-sm text-gray-700">Hari</label>
            <input type="text" name="hari" placeholder="Contoh: Senin" value="{{ old('hari') }}" required class="w-full border border-gray-300 rounded px-3 py-2">
        </div>

        <div>
            <label class="block mb-1 text-sm text-gray-700">Mode Belajar</label>
            <input type="text" name="mode_belajar" placeholder="Online/Offline" value="{{ old('mode_belajar') }}" required class="w-full border border-gray-300 rounded px-3 py-2">
        </div>

        <div>
            <label class="block mb-1 text-sm text-gray-700">Jam Mulai</label>
            <input type="time" name="jam_mulai" value="{{ old('jam_mulai') }}" required class="w-full border border-gray-300 rounded px-3 py-2">
        </div>

        <div>
            <label class="block mb-1 text-sm text-gray-700">Jam Selesai</label>
            <input type="time" name="jam_selesai" value="{{ old('jam_selesai') }}" required class="w-full border border-gray-300 rounded px-3 py-2">
        </div>

        <div class="flex justify-end gap-3 pt-4">
            <a href="{{ route('jadwal.index') }}" class="px-5 py-2 text-gray-700 bg-gray-200 rounded-lg hover:bg-gray-300 transition">Batal</a>
            <button type="submit" class="px-5 py-2 text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition">Simpan</button>
        </div>
    </form>
</div>
@endsection
