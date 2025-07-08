@extends('layouts.dashboardadmin')

@section('content')

<!-- Main Content -->
<div class="flex-1 flex flex-col text-center">
    <!-- Header -->
    <header class="bg-white p-4 shadow">
        <div class="container mx-auto">
            <h1 class="text-xl font-semibold text-gray-800">Manajemen Kursus</h1>
        </div>
    </header>

    <!-- Tombol Tambah -->
    <div class="container mx-auto mt-4 flex justify-end px-4">
        <a href="{{ route('admin.kursus.create') }}" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded text-sm shadow">
            + Tambah Kursus
        </a>
    </div>

    <!-- Tabel -->
    <div class="overflow-x-auto m-4">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <table class="min-w-full table-auto border border-gray-300">
                <thead class="bg-gray-700 text-white">
                    <tr>
                        <th class="border border-gray-300 px-6 py-3 text-sm font-semibold uppercase">No</th>
                        <th class="border border-gray-300 px-6 py-3 text-sm font-semibold uppercase">Bahasa</th>
                        <th class="border border-gray-300 px-6 py-3 text-sm font-semibold uppercase">Tutor</th>
                        <th class="border border-gray-300 px-6 py-3 text-sm font-semibold uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @forelse ($kursusList as $index => $kursus)
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-6 py-4">{{ $index + 1 }}</td>
                            <td class="border border-gray-300 px-6 py-4">{{ $kursus->kode_bahasa }}</td>
                            <td class="border border-gray-300 px-6 py-4">{{ $kursus->tutor->user->name ?? '-' }}</td>
                            <td class="border border-gray-300 px-6 py-4 space-x-2">
                                <a href="{{ route('admin.kursus.edit', $kursus->id_kursus) }}"
                                   class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm">Edit</a>
                                <form action="{{ route('admin.kursus.destroy', $kursus->id_kursus) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus kursus ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded text-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="border border-gray-300 px-6 py-4 text-center text-gray-500">Belum ada kursus.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
