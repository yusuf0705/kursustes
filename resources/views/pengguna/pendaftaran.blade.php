<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pendaftaran Kursus</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center px-4 py-10">
    <div class="w-full max-w-xl bg-white p-6 rounded-xl shadow-md">
        <h1 class="text-2xl font-bold mb-6 text-center">Pendaftaran Kursus</h1>

        <!-- Form Pendaftaran -->
        <form action="{{ route('pendaftaran.store') }}" method="POST" class="space-y-4">
            @csrf

            <!-- Nama -->
            <div>
                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                <input type="text" name="nama" id="nama" value="{{ old('nama') }}" placeholder="Nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5 @error('nama') border-red-500 @enderror" />
                @error('nama') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Telepon -->
            <div>
                <label for="telepon" class="block mb-2 text-sm font-medium text-gray-900">No Telepon</label>
                <input type="text" name="telepon" id="telepon" value="{{ old('telepon') }}" placeholder="No Telepon" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5 @error('telepon') border-red-500 @enderror" />
                @error('telepon') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Alamat -->
            <div>
                <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900">Alamat</label>
                <input type="text" name="alamat" id="alamat" value="{{ old('alamat') }}" placeholder="Alamat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5 @error('alamat') border-red-500 @enderror" />
                @error('alamat') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Pilih Bahasa -->
            <div>
                <label for="kode_bahasa" class="block mb-2 text-sm font-medium text-gray-900">Pilih Bahasa</label>
                <select id="kode_bahasa" name="kode_bahasa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5 @error('kode_bahasa') border-red-500 @enderror">
                    <option value="English" @if(old('kode_bahasa') == 'English') selected @endif>English</option>
                    <option value="Jepang" @if(old('kode_bahasa') == 'Jepang') selected @endif>Jepang</option>
                    <option value="Mandarin" @if(old('kode_bahasa') == 'Mandarin') selected @endif>Mandarin</option>
                    <option value="Korea" @if(old('kode_bahasa') == 'Korea') selected @endif>Korea</option>
                    <option value="Spanyol" @if(old('kode_bahasa') == 'Spanyol') selected @endif>Spanyol</option>
                    <option value="Jerman" @if(old('kode_bahasa') == 'Jerman') selected @endif>Jerman</option>
                </select>
                @error('kode_bahasa') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Durasi -->
            <div>
                <label for="durasi" class="block mb-2 text-sm font-medium text-gray-900">Berapa Bulan</label>
                <input type="number" name="durasi" id="durasi" value="{{ old('durasi') }}" placeholder="Berapa Bulan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5 @error('durasi') border-red-500 @enderror" />
                @error('durasi') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Harga -->
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900">Harga Program</label>
                <p class="bg-gray-100 border border-gray-300 text-gray-800 rounded-lg p-2.5">Rp {{ number_format($harga ?? 300000, 0, ',', '.') }}</p>
                <input type="hidden" name="harga" value="{{ $harga ?? 300000 }}">
            </div>

            <!-- Tombol Submit -->
            <button type="submit" class="w-full text-white bg-purple-600 hover:bg-purple-700 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Selesaikan Pendaftaran</button>
        </form>
    </div>

    <!-- JS Flowbite -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>
</html>
