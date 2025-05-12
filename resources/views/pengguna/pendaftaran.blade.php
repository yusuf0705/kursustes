<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pendaftaran Kursus</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center px-4 py-10">
    <div class="w-full max-w-xl bg-white p-6 rounded-xl shadow-md">
        <h1 class="text-2xl font-bold mb-6 text-center">Pendaftaran Kursus</h1>

        <!-- Form Pendaftaran -->
        <form action="{{ route('pendaftaran.store') }}" method="POST" class="space-y-4">
            @csrf
            
            <!-- Nama -->
            <div>
                <label for="nama" class="block text-gray-700">Nama</label>
                <input type="text" name="nama" id="nama" value="{{ old('nama') }}" placeholder="Nama" class="w-full border rounded p-2 @error('nama') border-red-500 @enderror" />
                @error('nama') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <!-- Gender -->
            

            <!-- Telepon -->
            <div>
                <label for="telepon" class="block text-gray-700">No Telpon</label>
                <input type="text" name="telepon" id="telepon" value="{{ old('telepon') }}" placeholder="No Telpon" class="w-full border rounded p-2 @error('telepon') border-red-500 @enderror" />
                @error('telepon') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <!-- Alamat -->
            <div>
                <label for="alamat" class="block text-gray-700">Alamat</label>
                <input type="text" name="alamat" id="alamat" value="{{ old('alamat') }}" placeholder="Alamat" class="w-full border rounded p-2 @error('alamat') border-red-500 @enderror" />
                @error('alamat') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <!-- Kode Bahasa -->
            <div class="mb-4">
                <label for="kode_bahasa" class="block text-gray-700">Pilih Bahasa</label>
                <select name="kode_bahasa" id="kode_bahasa" class="mt-1 p-2 w-full border rounded @error('kode_bahasa') border-red-500 @enderror">
                    <option value="English" @if(old('kode_bahasa') == 'English') selected @endif>English</option>
                    <option value="Jepang" @if(old('kode_bahasa') == 'Jepang') selected @endif>Jepang</option>
                    <option value="Mandarin" @if(old('kode_bahasa') == 'Mandarin') selected @endif>Mandarin</option>
                    <option value="Korea" @if(old('kode_bahasa') == 'Korea') selected @endif>Korea</option>
                    <option value="Spanyol" @if(old('kode_bahasa') == 'Spanyol') selected @endif>Spanyol</option>
                    <option value="Jerman" @if(old('kode_bahasa') == 'Jerman') selected @endif>Jerman</option>

                </select>
                @error('kode_bahasa') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>
            
            <!-- Durasi -->
            <div>
                <label for="durasi" class="block text-gray-700">Berapa Bulan</label>
                <input type="number" name="durasi" id="durasi" value="{{ old('durasi') }}" placeholder="Berapa Bulan" class="w-full border rounded p-2 @error('durasi') border-red-500 @enderror" />
                @error('durasi') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>
            <!-- harga -->
            <div>
                <label class="block text-gray-700">Harga Program</label>
                <p class="w-full border rounded p-2 bg-gray-50">Rp {{ number_format($harga ?? 300000, 0, ',', '.') }}</p>
                <input type="hidden" name="harga" value="{{ $harga ?? 300000 }}">
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full bg-purple-600 text-white py-2 rounded hover:bg-purple-700">Selesaikan Pendaftaran</button>
        </form>
    </div>
</body>
</html> 