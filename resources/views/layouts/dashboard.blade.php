<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <title>@yield('title', 'Dashboard')</title> 
    <script src="https://cdn.tailwindcss.com"></script> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
</head> 

<body class="bg-gray-50 min-h-screen font-sans"> 
    <div class="flex min-h-screen"> 
        <!-- Sidebar --> 
        <aside class="fixed w-20 md:w-24 bg-gray-800 border-r border-gray-300 h-screen flex flex-col items-center py-4 space-y-6"> 
            <button class="text-white hover:text-white"> 
                <span class="material-icons">list</span> 
            </button> 
            <nav class="flex flex-col items-center space-y-6 text-white text-sm"> 
                <a href="{{ route('pendaftaran.create', ['harga' => 300000]) }}" class="flex flex-col items-center hover:text-blue-400 transition"> 
                    <span class="material-icons">add</span> 
                    Daftar 
                </a> 
                <a href="{{ url('/dashboard') }}" class="flex flex-col items-center hover:text-blue-400 transition"> 
                    <span class="material-icons">dashboard</span> 
                    Dashboard 
                </a> 
                <a href="{{ url('/kursus') }}" class="flex flex-col items-center hover:text-blue-400 transition"> 
                    <span class="material-icons">school</span> 
                    Kursus 
                </a> 
                <button id="logout-btn" type="button" class="flex flex-col items-center text-white transition hover:text-red-400 cursor-pointer bg-transparent border-none"> 
                    <span class="material-icons">exit_to_app</span> 
                    Logout 
                </button> 
            </nav> 
        </aside> 

        <main class="flex-1 pt-3 pl-24 pr-5 ml-2 min-h-screen"> 
            @yield('content') 
        </main> 
    </div>

    <!-- Logout form -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> 
        @csrf 
    </form> 

    <!-- Script logout -->
    <script> 
        document.getElementById('logout-btn').addEventListener('click', function(event) {
            event.preventDefault();
            event.stopPropagation();

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
            });
        });
    </script> 
</body> 
</html>
