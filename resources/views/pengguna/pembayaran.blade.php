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

    <!-- Metode Pembayaran -->
<div>
    <label>Metode Pembayaran</label>
    <select name="metode" id="metode" class="w-full p-2 border rounded" onchange="setNoRek()">
        <option value="">-- Pilih Metode --</option>
        <option value="transfer">Transfer Bank</option>
        <option value="qris">QRIS</option>
    </select>
</div>

<!-- No Rekening / Referensi -->
<div>
    <label>No. Rekening / Referensi</label>
    <input type="text" name="no_rek" id="no_rek" class="w-full p-2 border rounded" placeholder="Isi nomor rekening / referensi pembayaran" readonly>
</div>

    <div>
        <label>Upload Bukti Pembayaran</label>
        <input type="file" name="bukti" class="w-full p-2 border rounded">
    </div>
     <!-- Tombol Submit -->
    <div class="flex space-x-2">
        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">
            Kirim Pembayaran
        </button>
        <a href="{{ route('kursus.index') }}" class="bg-blue-600 text-white px-4 py-2 rounded inline-block">
            Kembali ke Kursus
        </a>
    </div>
</form>

</main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    
<!-- Script -->
<script>
    function setNoRek() {
        const metode = document.getElementById('metode').value;
        const noRekField = document.getElementById('no_rek');

        if (metode === 'transfer') {
            noRekField.value = '12345678'; // No rekening bank
        } else if (metode === 'qris') {
            noRekField.value = 'QRIS-REFERENSI-0001'; // Referensi QRIS
        } else {
            noRekField.value = ''; // Kosongkan jika tidak dipilih
        }
    }
</script>
</body>
</html>
