<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pembayaran</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md bg-white border border-gray-200 rounded-lg shadow-md p-6">
        <h2 class="text-xl font-semibold text-center border-b border-gray-300 pb-3 mb-6">Pembayaran</h2>

        <p class="mb-4 text-gray-700"><strong>Bahasa:</strong> {{ $kode_bahasa }}</p>

        <form action="{{ route('pembayaran.success') }}" method="POST" class="space-y-4">
            @csrf

            <!-- Metode Pembayaran -->
            <div>
                <label for="metode" class="block mb-2 text-sm font-medium text-gray-900">Jenis Pembayaran</label>
                <select id="metode" name="metode" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5">
                    <option value="">Pilih metode</option>
                    <option value="Transfer">Transfer</option>
                    <option value="E-Wallet">E-Wallet</option>
                    <option value="Kartu Kredit">Kartu Kredit</option>
                </select>
            </div>

            <!-- Harga -->
            <div>
                <label for="harga" class="block mb-2 text-sm font-medium text-gray-900">Harga</label>
                <input type="text" id="harga" name="harga" value="Rp {{ number_format($harga, 0, ',', '.') }}" readonly class="bg-gray-100 border border-gray-300 text-gray-600 text-sm rounded-lg block w-full p-2.5 cursor-not-allowed">
            </div>

            <!-- No. Rekening -->
            <div>
                <label for="no_rek" class="block mb-2 text-sm font-medium text-gray-900">No. Rekening / E-Wallet</label>
                <input type="text" id="no_rek" name="no_rek" placeholder="Masukkan nomor rekening" required class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5">
            </div>

            <!-- Tombol -->
            <div class="pt-4 text-center">
                <button type="submit" class="text-white bg-purple-600 hover:bg-purple-700 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center transition">
                    Selesai
                </button>
            </div>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>
</html>
