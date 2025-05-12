<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md bg-white border border-gray-300 rounded-lg shadow-lg p-8">
        <h2 class="text-center text-lg font-semibold border-b border-gray-300 pb-2 mb-6">Pembayaran</h2>

        <p class="mb-2"><strong>Bahasa:</strong> {{ $kode_bahasa }}</p>

        <form action="{{ route('pembayaran.success') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <select name="metode" required class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-purple-400">
                    <option value="">Jenis Pembayaran</option>
                    <option value="Transfer">Transfer</option>
                    <option value="E-Wallet">E-Wallet</option>
                    <option value="Kartu Kredit">Kartu Kredit</option>
                </select>
            </div>

            <div>
                <input type="text" name="harga" value="Rp {{ number_format($harga, 0, ',', '.') }}" readonly class="w-full border border-gray-300 rounded px-3 py-2 bg-gray-100 text-gray-600">
            </div>

            <div>
                <input type="text" name="no_rek" placeholder="No.Rek" required class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-purple-400">
            </div>

            <div class="pt-4 text-center">
                <button type="submit" class="px-6 py-2 border border-gray-400 rounded hover:bg-gray-100 transition">
                    Selesai
                </button>
            </div>
        </form>
    </div>
</body>
</html>
