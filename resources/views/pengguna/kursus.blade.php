<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Dashboard')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="bg-purple-50 min-h-screen font-sans">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="fixed w-20 md:w-24 bg-pink-200 border-r border-gray-300 h-screen flex flex-col items-center py-4 space-y-6">
            <nav class="flex flex-col items-center space-y-6 text-purple-800 text-sm">
                <a href="{{ route('pendaftaran.create') }}" class="flex flex-col items-center">
                    <span class="material-icons">add</span>
                    Daftar
                </a>
                <a href="{{ url('/dashboard') }}" class="flex flex-col items-center">
                    <span class="material-icons">dashboard</span>
                    Dashboard
                </a>
                <a href="{{ url('/kursus') }}" class="flex flex-col items-center">
                    <span class="material-icons">school</span>
                    Kursus
                </a>
                <a href="{{ url('/history') }}" class="flex flex-col items-center">
                    <span class="material-icons">book</span>
                    History
                </a>
                <a href="{{ url('/login') }}" class="flex flex-col items-center">
                    <span class="material-icons">exit_to_app</span>
                    Logout
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6 ml-24">
            <h1 class="text-2xl font-bold mb-4">Kursus yang Diikuti</h1>

            @if($kursusDiambil->isEmpty())
                <div class="bg-yellow-100 text-yellow-800 p-4 rounded border border-yellow-300 mt-4">
                    <p>Silakan daftar terlebih dahulu untuk melihat kursus.</p>
                    <a href="{{ route('pendaftaran.create') }}" class="text-blue-600 underline">Klik di sini untuk mendaftar</a>
                </div>
            @else
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-6">
                    @foreach($kursusDiambil as $kursus)
                        <div class="bg-white p-4 rounded shadow">
                            <div class="h-32 bg-gray-100 rounded mb-4 flex items-center justify-center">
                                <span class="material-icons text-gray-400 text-5xl">image</span>
                            </div>
                            <h2 class="text-lg font-bold capitalize">{{ $kursus->kode_bahasa }}</h2>
                            <p class="text-sm text-gray-600 mt-2">
                                {{ $kursus->deskripsi ?? 'Deskripsi belum tersedia untuk kursus ini.' }}
                            </p>
                            <a href="{{ route('materi', ['kode_bahasa' => $kursus->kode_bahasa]) }}"
   class="bg-purple-700 text-white px-4 py-2 rounded hover:bg-purple-800 text-center w-full block">
   Mulai Belajar
</a>

                        </div>
                    @endforeach
                </div>
            @endif
        </main>
    </div>
</body>
</html>
