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
        <a href="#" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded text-sm shadow">
            + Tambah Pendaftaran
        </a>
    </div>

 <div class="overflow-x-auto m-4">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <table class="min-w-full table-auto border border-gray-300">
            <thead class="bg-gray-700 text-white">
                <tr>
                    <th class="border border-gray-300 px-6 py-3 text-sm font-semibold uppercase">No</th>
                    <th class="border border-gray-300 px-6 py-3 text-sm font-semibold uppercase">ID</th>
                    <th class="border border-gray-300 px-6 py-3 text-sm font-semibold uppercase">Nama</th>
                    <th class="border border-gray-300 px-6 py-3 text-sm font-semibold uppercase">No Telepon</th>
                    <th class="border border-gray-300 px-6 py-3 text-sm font-semibold uppercase">Alamat</th>
                    <th class="border border-gray-300 px-6 py-3 text-sm font-semibold uppercase">Program</th>
                    <th class="border border-gray-300 px-6 py-3 text-sm font-semibold uppercase">Selama (Bulan)</th>
                    <th class="border border-gray-300 px-6 py-3 text-sm font-semibold uppercase">Harga</th>
                    <th class="border border-gray-300 px-6 py-3 text-sm font-semibold uppercase">Konfirmasi</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 px-6 py-4">1</td>
                    <td class="border border-gray-300 px-6 py-4">1</td>
                    <td class="border border-gray-300 px-6 py-4">Blum</td>
                    <td class="border border-gray-300 px-6 py-4">1234567890</td>
                    <td class="border border-gray-300 px-6 py-4">Batam</td>
                    <td class="border border-gray-300 px-6 py-4">English</td>
                    <td class="border border-gray-300 px-6 py-4">1</td>
                    <td class="border border-gray-300 px-6 py-4">300.000</td>
                    <td class="border border-gray-300 px-6 py-4 space-x-2">
                        <button class="bg-green-600 hover:bg-green-700 text-white px-3 py-1 rounded text-sm shadow-sm transition">Konfirmasi</button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 px-6 py-4">2</td>
                    <td class="border border-gray-300 px-6 py-4">2</td>
                    <td class="border border-gray-300 px-6 py-4">2-2-2222</td>
                    <td class="border border-gray-300 px-6 py-4">0987654321</td>
                    <td class="border border-gray-300 px-6 py-4">Batam</td>
                    <td class="border border-gray-300 px-6 py-4">Jepang</td>
                    <td class="border border-gray-300 px-6 py-4">2</td>
                    <td class="border border-gray-300 px-6 py-4">600.000</td>
                    <td class="border border-gray-300 px-6 py-4 space-x-2">
                        <button class="bg-green-600 hover:bg-green-700 text-white px-3 py-1 rounded text-sm shadow-sm transition">Konfirmasi</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection