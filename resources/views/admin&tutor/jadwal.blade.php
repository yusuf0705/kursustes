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

    <!-- Tombol Tambah -->
    <div class="container mx-auto mt-4 flex justify-end px-4">
        <a href="#" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded text-sm shadow">
            + Tambah Jadwal
        </a>
    </div>

    <!-- Tabel -->
    <div class="overflow-x-auto m-4">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <table class="min-w-full table-auto border border-gray-300">
                <thead class="bg-gray-700 text-white">
                    <tr>
                        <th class="border border-gray-300 px-6 py-3 text-sm font-semibold uppercase">No</th>
                        <th class="border border-gray-300 px-6 py-3 text-sm font-semibold uppercase">ID Kursus</th>
                        <th class="border border-gray-300 px-6 py-3 text-sm font-semibold uppercase">Hari</th>
                        <th class="border border-gray-300 px-6 py-3 text-sm font-semibold uppercase">Jam Mulai</th>
                        <th class="border border-gray-300 px-6 py-3 text-sm font-semibold uppercase">Jam Selesai</th>
                        <th class="border border-gray-300 px-6 py-3 text-sm font-semibold uppercase">Metode</th>
                        <th class="border border-gray-300 px-6 py-3 text-sm font-semibold uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-6 py-4">1</td>
                        <td class="border border-gray-300 px-6 py-4">2</td>
                        <td class="border border-gray-300 px-6 py-4">Senin</td>
                        <td class="border border-gray-300 px-6 py-4">18.00</td>
                        <td class="border border-gray-300 px-6 py-4">20.00</td>
                        <td class="border border-gray-300 px-6 py-4">Offline</td>
                        <td class="border border-gray-300 px-6 py-4 space-x-2">
                            <button class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm">Edit</button>
                            <button class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded text-sm">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
