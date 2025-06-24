<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pembayaran</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
</head>
<body>
    <main class="p-6">
    <h1 class="text-xl font-semibold mb-4">Pembayaran</h1>

    @if(session('success'))
        <div class="bg-green-100 p-4 rounded mb-4">{{ session('success') }}</div>
    @endif

    <form action="{{ route('pembayaran.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
    @csrf

    <div>
        <label>Metode Pembayaran</label>
        <select name="metode" class="w-full p-2 border rounded">
            <option value="transfer">Transfer Bank</option>
            <option value="qris">QRIS</option>
        </select>
    </div>

    <div>
        <label>No. Rekening / Referensi</label>
        <input type="text" name="no_rek" class="w-full p-2 border rounded" placeholder="Isi nomor rekening / referensi pembayaran">
    </div>

    <div>
        <label>Upload Bukti Pembayaran</label>
        <input type="file" name="bukti" class="w-full p-2 border rounded">

    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Bayar Sekarang</button>
</form>

</main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>
</html>
