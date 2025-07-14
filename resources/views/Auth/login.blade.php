<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Kursus Bahasa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        @keyframes shimmer {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }
        
        @keyframes sparkle {
            0%, 100% { opacity: 0; transform: scale(0); }
            50% { opacity: 1; transform: scale(1); }
        }
        
        .shimmer-effect {
            position: relative;
            overflow: hidden;
        }
        
        .shimmer-effect::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.1), transparent);
            animation: shimmer 3s ease-in-out infinite;
        }
        
        .sparkle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: white;
            border-radius: 50%;
            animation: sparkle 2s ease-in-out infinite;
        }
        
        .sparkle:nth-child(1) { top: 20%; left: 10%; animation-delay: 0s; }
        .sparkle:nth-child(2) { top: 40%; left: 80%; animation-delay: 0.5s; }
        .sparkle:nth-child(3) { top: 60%; left: 30%; animation-delay: 1s; }
        .sparkle:nth-child(4) { top: 80%; left: 70%; animation-delay: 1.5s; }
        .sparkle:nth-child(5) { top: 30%; left: 50%; animation-delay: 2s; }
        
        .glass-effect {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .gradient-border {
            background: linear-gradient(45deg, #6b7280, #9ca3af, #6b7280);
            background-size: 400% 400%;
            animation: gradientShift 3s ease infinite;
        }
        
        @keyframes gradientShift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        
        .input-glow:focus {
            box-shadow: 0 0 20px rgba(156, 163, 175, 0.3);
        }
        
        .btn-shimmer {
            background: linear-gradient(45deg, #4b5563, #6b7280, #4b5563);
            background-size: 200% 200%;
            animation: gradientShift 2s ease infinite;
        }
    </style>
</head>
<body class="min-h-screen bg-gray-900">

    <section class="bg-no-repeat inset-0 bg-cover bg-gradient-to-br from-gray-900 via-slate-800 to-gray-900 relative overflow-hidden">
        <!-- Animated background particles -->
        <div class="absolute inset-0">
            <div class="sparkle"></div>
            <div class="sparkle"></div>
            <div class="sparkle"></div>
            <div class="sparkle"></div>
            <div class="sparkle"></div>
        </div>
        
        <div class="container px-4 py-16 mx-auto relative z-10">
            <div class="max-w-5xl mx-auto glass-effect rounded-2xl p-6 shadow-2xl shimmer-effect">
                <div class="grid xl:grid-cols-5 lg:grid-cols-3 gap-6">

                    <!-- Left Section -->
                    <div class="xl:col-span-2 lg:col-span-1 hidden lg:block">
                        <div class="bg-gradient-to-br from-slate-700 to-gray-800 text-white rounded-xl flex flex-col justify-between gap-10 h-full w-full p-7 relative overflow-hidden shimmer-effect">
                            <div class="sparkle"></div>
                            <div class="sparkle"></div>
                            <div class="sparkle"></div>
                            
                            <span class="font-semibold tracking-widest uppercase text-gray-300">KursusBahasa</span>
                            <div>
                                <h1 class="text-3xl mb-4 bg-gradient-to-r from-white to-gray-300 bg-clip-text text-transparent">Jelajahi Dunia Bahasa Bersama Kami</h1>
                                <p class="text-gray-300 font-normal leading-relaxed">
                                    Belajar bahasa asing dengan mudah dan menyenangkan. Tingkatkan kemampuan berbahasa Anda bersama instruktur profesional kami.
                                </p>
                            </div>
                            <div>
                                <div class="glass-effect rounded-xl p-5 border border-gray-600/30">
                                    <p class="text-gray-300 text-sm mb-4">
                                        "Kursus di KursusBahasa sangat membantu saya menguasai bahasa Inggris dalam waktu singkat. Metodenya efektif dan pengajarnya ramah!"
                                    </p>
                                    <div class="flex items-center gap-4">
                                        <div class="h-12 w-12 rounded-full bg-gradient-to-r from-gray-500 to-slate-600 flex items-center justify-center text-white font-bold shadow-lg">AS</div>
                                        <div>
                                            <p class="font-normal text-white">Andi Saputra</p>
                                            <span class="text-xs font-normal text-gray-400">Siswa Bahasa Inggris</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Section (Login Form) -->
                    <div class="xl:col-span-3 lg:col-span-2 lg:mx-10 my-auto">
                        <div>
                            <h1 class="text-2xl mb-3 bg-gradient-to-r from-white to-gray-300 bg-clip-text text-transparent">Masuk</h1>
                            <p class="text-sm font-medium leading-relaxed text-gray-300">Selamat datang kembali di Kursus Bahasa! Silakan masuk untuk melanjutkan pembelajaran Anda.</p>
                        </div>

                        <form action="{{ route('login.process') }}" method="POST" class="space-y-5 mt-10">
                            @csrf

                            <!-- Email -->
                            <div>
                                <label class="font-medium text-sm block mb-2 text-gray-300" for="email">Email</label>
                                <input class="text-gray-300 bg-gray-800/50 border-gray-600 focus:ring-0 focus:border-gray-400 text-sm rounded-lg py-2.5 px-4 w-full input-glow backdrop-blur-sm transition-all duration-300" 
                                    type="email" id="email" name="email" value="{{ old('email') }}" 
                                    placeholder="Masukkan Email Anda">
                                @error('email')
                                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div>
                                <div class="flex items-center justify-between mb-2">
                                    <label class="font-medium text-sm text-gray-300" for="password">Password</label>
                                    <a href="{{ route('password.request') }}" class="font-medium text-gray-400 text-sm hover:text-gray-300 transition-colors">Lupa password?</a>
                                </div>
                                <input class="text-gray-300 bg-gray-800/50 border-gray-600 focus:ring-0 focus:border-gray-400 text-sm rounded-lg py-2.5 px-4 w-full input-glow backdrop-blur-sm transition-all duration-300"
                                    type="password" id="password" name="password"
                                    placeholder="Masukkan Password Anda">
                                @error('password')
                                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Remember Me -->
                            <div class="flex items-center">
                                <input type="checkbox" id="remember" name="remember" class="h-4 w-4 text-gray-600 focus:ring-gray-500 border-gray-600 rounded bg-gray-800">
                                <label for="remember" class="ml-2 block text-sm text-gray-300">Ingat saya</label>
                            </div>

                            <!-- Button -->
                            <div class="flex flex-wrap items-center justify-between gap-6 mt-8">
                                <button type="submit" class="btn-shimmer text-white text-sm rounded-lg px-6 py-2.5 font-medium shadow-lg hover:shadow-gray-500/25 transition-all duration-300 transform hover:scale-105">Masuk</button>
                                <p class="text-sm text-gray-400">Belum punya akun? <a href="{{ route('register') }}" class="ml-2 underline text-gray-300 hover:text-white transition-colors">Daftar Sekarang</a></p>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>

    @if(session('logout_success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Logout Berhasil!',
            text: '{{ addslashes(session("logout_success")) }}',
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
            background: '#1f2937',
            color: '#fff',
            iconColor: '#10b981'
        });
    </script>
    @endif

    <!-- SweetAlert: Login/Register Success -->
    @if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: '{{ addslashes(session("success")) }}',
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
            background: '#1f2937',
            color: '#fff'
        });
    </script>
    @endif

    <!-- SweetAlert: Login Gagal -->
    @if($errors->has('email'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Login Gagal!',
            text: '{{ addslashes($errors->first("email")) }}',
            showConfirmButton: true,
            background: '#1f2937',
            color: '#fff'
        });
    </script>
    @endif

</body>
</html>