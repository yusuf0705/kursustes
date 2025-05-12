@extends('layouts.dashboard')

@section('title', 'Dashboard Kursus Bahasa')

@section('content')
    <div class="flex min-h-screen">

        <!-- Konten Utama -->
        <main class="flex-1 p-6 bg-gray-100">
            <div class="w-full max-w-4xl mx-auto p-8 bg-white border border-gray-300 rounded-lg shadow-lg">
                <h2 class="text-center text-lg font-semibold border-b border-gray-300 pb-2 mb-6">Riwayat Pembayaran</h2>

                <table class="w-full table-auto border-collapse">
                    <thead>
                        <tr class="border-b">
                            <th class="px-4 py-2 text-left">Tanggal</th>
                            <th class="px-4 py-2 text-left">Metode Pembayaran</th>
                            <th class="px-4 py-2 text-left">Harga</th>
                            <th class="px-4 py-2 text-left">No. Rekening</th>
                            <th class="px-4 py-2 text-left">Status Pembayaran</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Baris 1: Belum Dibayar -->
                        <tr class="border-b">
                            <td class="px-4 py-2">2025-04-24</td>
                            <td class="px-4 py-2">Transfer</td>
                            <td class="px-4 py-2">Rp 150,000</td>
                            <td class="px-4 py-2">123456789</td>
                            <td class="px-4 py-2 text-red-500">Belum Dibayar</td>
                        </tr>

                        <!-- Baris 2: Sudah Dibayar -->
                        <tr class="border-b">
                            <td class="px-4 py-2">2025-04-23</td>
                            <td class="px-4 py-2">E-Wallet</td>
                            <td class="px-4 py-2">Rp 200,000</td>
                            <td class="px-4 py-2">987654321</td>
                            <td class="px-4 py-2 text-green-500">Sudah Dibayar</td>
                        </tr>

                        <!-- Baris 3: Belum Dibayar -->
                        <tr class="border-b">
                            <td class="px-4 py-2">2025-04-22</td>
                            <td class="px-4 py-2">Kartu Kredit</td>
                            <td class="px-4 py-2">Rp 300,000</td>
                            <td class="px-4 py-2">555555555</td>
                            <td class="px-4 py-2 text-red-500">Belum Dibayar</td>
                        </tr>

                        <!-- Baris 4: Sudah Dibayar -->
                        <tr class="border-b">
                            <td class="px-4 py-2">2025-04-21</td>
                            <td class="px-4 py-2">Transfer</td>
                            <td class="px-4 py-2">Rp 250,000</td>
                            <td class="px-4 py-2">111223344</td>
                            <td class="px-4 py-2 text-green-500">Sudah Dibayar</td>
                        </tr>

                        <!-- Tambahkan lebih banyak baris history pembayaran di sini -->
                    </tbody>
                </table>
            </div>
        </main>
    @endsection
