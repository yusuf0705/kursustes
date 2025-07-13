<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Dashboard')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-purple-50 min-h-screen font-sans">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
                <aside class="fixed w-20 md:w-24 bg-gray-800 border-r border-gray-300 h-screen flex flex-col items-center py-4 space-y-6">
            <button class="text-white hover:text-white">
                <span class="material-icons">list</span>
            </button>
            <nav class="flex flex-col items-center space-y-6 text-white text-sm">
                <a href="{{ route('pendaftaran.create', ['harga' => 300000]) }}" class="flex flex-col items-center">
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

                <button type="button" onclick="logoutConfirm()" class="flex flex-col items-center text-white transition hover:text-red-400 cursor-pointer bg-transparent border-none"> 
                    <span class="material-icons">exit_to_app</span> 
                    logout 
                </button>
                
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
                        <div class="bg-white p-4 rounded shadow hover:shadow-lg transition-shadow">
                            <!-- Flag Image -->
                            <div class="h-32 bg-gray-100 rounded mb-4 overflow-hidden">
                                @if($kursus->flag_image)
                                    <img src="{{ $kursus->flag_image }}" 
                                         alt="{{ ucfirst($kursus->kode_bahasa) }} Flag"
                                         class="w-full h-full object-cover"
                                         onerror="this.parentElement.innerHTML='<div class=\'w-full h-full flex items-center justify-center\'><span class=\'material-icons text-gray-400 text-5xl\'>language</span></div>'">
                                @else
                                    <div class="w-full h-full flex items-center justify-center">
                                        <span class="material-icons text-gray-400 text-5xl">language</span>
                                    </div>
                                @endif
                            </div>
                            
                            <!-- Course Info -->
                            <h2 class="text-lg font-bold capitalize mb-2">{{ $kursus->kode_bahasa }}</h2>
                            <p class="text-sm text-gray-600 mb-4">
                                {{ $kursus->deskripsi ?? 'Deskripsi belum tersedia untuk kursus ini.' }}
                            </p>
                            
                            <!-- Action Button -->
                            <a href="{{ route('materi', ['kode_bahasa' => $kursus->kode_bahasa]) }}"
                               class="bg-gray-700 text-white px-4 py-2 rounded hover:bg-gray-800 text-center w-full block transition-colors">
                               Mulai Belajar
                            </a>
                        </div>
                    @endforeach
                </div>
            @endif
        </main>
    </div>

    <!-- Form logout (hidden) -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> 
        @csrf 
    </form>

    <!-- JavaScript -->
    <script> 
        function logoutConfirm(event) { 
            // Mencegah default action apapun
            if (event) {
                event.preventDefault();
                event.stopPropagation();
            }
            
            Swal.fire({ 
                title: 'Yakin mau logout?', 
                text: "Kamu akan keluar dari akun ini.", 
                icon: 'warning', 
                showCancelButton: true, 
                confirmButtonColor: '#d33', 
                cancelButtonColor: '#3085d6', 
                confirmButtonText: 'Ya, Logout!', 
                cancelButtonText: 'Batal', 
                reverseButtons: true 
            }).then((result) => { 
                if (result.isConfirmed) { 
                    document.getElementById('logout-form').submit(); 
                } 
            }) 
        }
    </script>
</body>
</html>