<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $course['name'] }} - Detail Kursus</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-purple-50 min-h-screen font-sans">

    <div class="max-w-4xl mx-auto px-6 py-10">
        <a href="{{ url()->previous() }}" class="text-purple-700 hover:underline mb-4 inline-block">&larr; Kembali</a>

        <div class="bg-white rounded-xl shadow-md overflow-hidden grid md:grid-cols-2">
            <img src="{{ $course['image'] }}" alt="{{ $course['name'] }}" class="object-cover w-full h-64 md:h-auto">
            <div class="p-6 flex flex-col justify-between">
                <div>
                    <h1 class="text-3xl font-bold mb-4">{{ $course['name'] }}</h1>
                    <p class="text-gray-600 mb-4">{{ $course['description'] }}</p>
                    <p class="text-gray-800 font-medium">Harga: Rp300.000 / Bulan</p>
                </div>
                <a href="{{ route('pendaftaran.create', ['harga' => 300000]) }}"
                    class="bg-purple-700 text-white px-4 py-2 rounded hover:bg-purple-800 text-center w-full block">
                    Mulai Belajar
                </a>

            </div>
        </div>
    </div>

</body>
</html>
