{{-- resources/views/admin_tutor/tutormateri_crud/edit.blade.php --}}
@extends('layouts.dashboardadmin')

@section('content')
<div class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow mt-10">
    <h2 class="text-2xl font-semibold mb-6 text-gray-800">Edit Materi</h2>

    <form action="{{ route('tutormateri.update', $tutormateri->id_materi) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')

        <div>
            <label for="id_kursus" class="block text-sm font-medium text-gray-700">ID Kursus</label>
            <input type="number" name="id_kursus" id="id_kursus" value="{{ $tutormateri->id_kursus }}" required
                class="mt-1 block w-full border border-gray-300 rounded px-3 py-2">
        </div>

        <div>
            <label for="id_tutor" class="block text-sm font-medium text-gray-700">ID Tutor</label>
            <input type="number" name="id_tutor" id="id_tutor" value="{{ $tutormateri->id_tutor }}" required
                class="mt-1 block w-full border border-gray-300 rounded px-3 py-2">
        </div>

        <div>
            <label for="judul" class="block text-sm font-medium text-gray-700">Judul Materi</label>
            <input type="text" name="judul" id="judul" value="{{ $tutormateri->judul }}" required
                class="mt-1 block w-full border border-gray-300 rounded px-3 py-2">
        </div>

        <div>
            <label for="isi_materi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
            <textarea name="isi_materi" id="isi_materi" rows="4"
                class="mt-1 block w-full border border-gray-300 rounded px-3 py-2">{{ $tutormateri->isi_materi }}</textarea>
        </div>

        <div>
            <label for="file" class="block text-sm font-medium text-gray-700">File Materi (kosongkan jika tidak diubah)</label>
            <input type="file" name="file" id="file"
                class="mt-1 block w-full border border-gray-300 rounded px-3 py-2">
            @if ($tutormateri->file_path)
                <p class="text-sm mt-1">File saat ini:
                    <a href="{{ asset('storage/' . $tutormateri->file_path) }}" target="_blank" class="text-blue-600 underline">Lihat File</a>
                </p>
            @endif
        </div>

        <div class="flex justify-end gap-3">
            <a href="{{ route('tutormateri.index') }}"
                class="px-5 py-2 text-gray-700 bg-gray-200 rounded-lg hover:bg-gray-300">Batal</a>
            <button type="submit"
                class="px-5 py-2 text-white bg-blue-600 rounded-lg hover:bg-blue-700">Update</button>
        </div>
    </form>
</div>
@endsection
