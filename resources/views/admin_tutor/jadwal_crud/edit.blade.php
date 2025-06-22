@extends('layouts.dashboardadmin')

@section('content')
<div class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow mt-10">
    <h2 class="text-2xl font-semibold mb-6 text-gray-800">Edit Jadwal</h2>

    <form action="{{ route('jadwal.update', $jadwal->id_jadwal) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="id_kursus" class="block mb-2 text-sm font-medium text-gray-700">ID Kursus</label>
            <input type="number" name="id_kursus" id="id_kursus" value="{{ old('id_kursus', $jadwal->id_kursus) }}" required
                class="w-full p-2.5 border border-gray-300 rounded-lg">
            @error('id_kursus')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="id_tutor" class="block mb-2 text-sm font-medium text-gray-700">ID Tutor</label>
            <input type="number" name="id_tutor" id="id_tutor" value="{{ old('id_tutor', $jadwal->id_tutor) }}" required
                class="w-full p-2.5 border border-gray-300 rounded-lg">
            @error('id_tutor')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="hari" class="block mb-2 text-sm font-medium text-gray-700">Hari</label>
            <input type="text" name="hari" id="hari" value="{{ old('hari', $jadwal->hari) }}" required
                class="w-full p-2.5 border border-gray-300 rounded-lg">
            @error('hari')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="mode_belajar" class="block mb-2 text-sm font-medium text-gray-700">Mode Belajar</label>
            <input type="text" name="mode_belajar" id="mode_belajar" value="{{ old('mode_belajar', $jadwal->mode_belajar) }}" required
                class="w-full p-2.5 border border-gray-300 rounded-lg">
            @error('mode_belajar')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="jam_mulai" class="block mb-2 text-sm font-medium text-gray-700">Jam Mulai</label>
            <input type="time" name="jam_mulai" id="jam_mulai" value="{{ old('jam_mulai', $jadwal->jam_mulai) }}" required
                class="w-full p-2.5 border border-gray-300 rounded-lg">
            @error('jam_mulai')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="jam_selesai" class="block mb-2 text-sm font-medium text-gray-700">Jam Selesai</label>
            <input type="time" name="jam_selesai" id="jam_selesai" value="{{ old('jam_selesai', $jadwal->jam_selesai) }}" required
                class="w-full p-2.5 border border-gray-300 rounded-lg">
            @error('jam_selesai')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex justify-end gap-3">
            <a href="{{ route('jadwal.index') }}" class="px-5 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300">Batal</a>
            <button type="submit" class="px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Update</button>
        </div>
    </form>
</div>
@endsection
