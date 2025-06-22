@extends('layouts.dashboardadmin')

@section('content')

<!-- Main Content -->
<div class="flex-1 flex flex-col text-center">
    <!-- Header -->
    <header class="bg-white p-4 shadow">
        <div class="container mx-auto">
            <h1 class="text-xl font-semibold text-gray-800">Aplikasi Kursus Bahasa Asing</h1>
        </div>
    </header>

    <div class="container mx-auto mt-4 flex justify-end px-4">
        <a href="{{ route('tutormateri.create') }}"
           class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded text-sm shadow">
            + Tambah Materi
        </a>
    </div>

    <div class="overflow-x-auto m-4">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <table class="min-w-full table-auto border border-gray-300">
                <thead class="bg-gray-700 text-white">
                    <tr>
                        <th class="border border-gray-300 px-6 py-3 text-sm font-semibold uppercase">No</th>
                        <th class="border border-gray-300 px-6 py-3 text-sm font-semibold uppercase">Judul Materi</th>
                        <th class="border border-gray-300 px-6 py-3 text-sm font-semibold uppercase">Deskripsi</th>
                        <th class="border border-gray-300 px-6 py-3 text-sm font-semibold uppercase">File</th>
                        <th class="border border-gray-300 px-6 py-3 text-sm font-semibold uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @forelse ($materiList as $index => $materi)
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-6 py-4">{{ $index + 1 }}</td>
                        <td class="border border-gray-300 px-6 py-4">{{ $materi->judul }}</td>
                        <td class="border border-gray-300 px-6 py-4">{{ \Illuminate\Support\Str::limit($materi->isi_materi, 50) }}</td>
                        <td class="border border-gray-300 px-6 py-4">
                            @if($materi->file_path)
                                <a href="{{ asset($materi->file_path) }}" class="text-blue-600 hover:underline" target="_blank">
                                    Lihat File
                                </a>
                            @else
                                <span class="text-gray-400 italic">Tidak ada file</span>
                            @endif
                        </td>
                        <td class="border border-gray-300 px-6 py-4 space-x-2">
                            <a href="{{ route('tutormateri.edit', $materi->id_materi) }}"
                               class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm">Edit</a>
                            <form action="{{ route('tutormateri.destroy', $materi->id_materi) }}" method="POST" class="inline"
                                  onsubmit="return confirm('Yakin ingin menghapus materi ini?');">
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
                        <td colspan="5" class="text-center text-gray-500 py-4">Belum ada materi.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
