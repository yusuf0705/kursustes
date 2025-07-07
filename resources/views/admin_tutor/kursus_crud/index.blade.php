@extends('layouts.dashboardadmin')

@section('content')
    <h1 class="text-xl font-bold mb-4">Daftar Kursus</h1>
    <a href="{{ route('kursus.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded mb-4 inline-block">+ Tambah Kursus</a>

    <table class="min-w-full border border-gray-300">
        <thead class="bg-gray-200">
            <tr>
                <th class="border px-4 py-2">#</th>
                <th class="border px-4 py-2">Bahasa</th>
                <th class="border px-4 py-2">Tutor</th>
                <th class="border px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kursusList as $i => $k)
                <tr>
                    <td class="border px-4 py-2">{{ $i + 1 }}</td>
                    <td class="border px-4 py-2">{{ $k->kode_bahasa }}</td>
                    <td class="border px-4 py-2">{{ $k->tutor->nama ?? '-' }}</td>
                    <td class="border px-4 py-2 space-x-2">
                        <a href="{{ route('kursus.edit', $k->id_kursus) }}" class="text-blue-600">Edit</a>
                        <form action="{{ route('kursus.destroy', $k->id_kursus) }}" method="POST" class="inline" onsubmit="return confirm('Yakin?')">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
