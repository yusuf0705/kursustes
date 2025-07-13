<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Kursus Bahasa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="min-h-screen bg-gray-100">

    <section class="bg-no-repeat inset-0 bg-cover bg-gradient-to-r from-blue-500 to-purple-600">
        <div class="container px-4 py-16 mx-auto">
            <div class="max-w-5xl mx-auto bg-white rounded-lg p-5 shadow-xl">
                <div class="grid xl:grid-cols-5 lg:grid-cols-3 gap-6">

                    <!-- Left Section -->
                    <div class="xl:col-span-2 lg:col-span-1 hidden lg:block">
                        <div class="bg-indigo-600 text-white rounded-lg flex flex-col justify-between gap-10 h-full w-full p-7">
                            <span class="font-semibold tracking-widest uppercase">KursusBahasa</span>
                            <div>
                                <h1 class="text-3xl mb-4">Jelajahi Dunia Bahasa Bersama Kami</h1>
                                <p class="text-gray-200 font-normal leading-relaxed">
                                    Belajar bahasa asing dengan mudah dan menyenangkan. Tingkatkan kemampuan berbahasa Anda bersama instruktur profesional kami.
                                </p>
                            </div>
                            <div>
                                <div class="bg-indigo-700/50 rounded-lg p-5">
                                    <p class="text-gray-200 text-sm mb-4">
                                        "Kursus di KursusBahasa sangat membantu saya menguasai bahasa Inggris dalam waktu singkat. Metodenya efektif dan pengajarnya ramah!"
                                    </p>
                                    <div class="flex items-center gap-4">
                                        <div class="h-12 w-12 rounded-full bg-indigo-400 flex items-center justify-center text-white font-bold">AS</div>
                                        <div>
                                            <p class="font-normal">Andi Saputra</p>
                                            <span class="text-xs font-normal">Siswa Bahasa Inggris</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Section (Login Form) -->
                    <div class="xl:col-span-3 lg:col-span-2 lg:mx-10 my-auto">
                        <div>
                            <h1 class="text-2xl mb-3">Masuk</h1>
                            <p class="text-sm font-medium leading-relaxed">Selamat datang kembali di Kursus Bahasa! Silakan masuk untuk melanjutkan pembelajaran Anda.</p>
                        </div>

                        <form action="{{ route('login.process') }}" method="POST" class="space-y-5 mt-10">
                            @csrf

                            <!-- Email -->
                            <div>
                                <label class="font-medium text-sm block mb-2" for="email">Email</label>
                                <input class="text-gray-500 border-gray-300 focus:ring-0 focus:border-gray-400 text-sm rounded-lg py-2.5 px-4 w-full" 
                                    type="email" id="email" name="email" value="{{ old('email') }}" 
                                    placeholder="Masukkan Email Anda">
                                @error('email')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div>
                                <div class="flex items-center justify-between mb-2">
                                    <label class="font-medium text-sm" for="password">Password</label>
                                    <a href="{{ route('password.request') }}" class="font-medium text-gray-500 text-sm">Lupa password?</a>
                                </div>
                                <input class="text-gray-500 border-gray-300 focus:ring-0 focus:border-gray-400 text-sm rounded-lg py-2.5 px-4 w-full"
                                    type="password" id="password" name="password"
                                    placeholder="Masukkan Password Anda">
                                @error('password')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Remember Me -->
                            <div class="flex items-center">
                                <input type="checkbox" id="remember" name="remember" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                                <label for="remember" class="ml-2 block text-sm text-gray-900">Ingat saya</label>
                            </div>

                            <!-- Button -->
                            <div class="flex flex-wrap items-center justify-between gap-6 mt-8">
                                <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white text-sm rounded-lg px-6 py-2.5">Masuk</button>
                                <p class="text-sm text-gray-500">Belum punya akun? <a href="{{ route('register') }}" class="ml-2 underline text-indigo-600">Daftar Sekarang</a></p>
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
        background: '#f0fdf4',
        iconColor: '#16a34a'
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
        timerProgressBar: true
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
    });
</script>
@endif

</body>
</html>
