<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - KursusBahasa</title>
    <script src="https://cdn.tailwindcss.com"></script>
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

    <section class="bg-no-repeat inset-0 bg-cover bg-gradient-to-br from-gray-900 via-slate-800 to-gray-900 relative overflow-hidden py-10">
        <!-- Animated background particles -->
        <div class="absolute inset-0">
            <div class="sparkle"></div>
            <div class="sparkle"></div>
            <div class="sparkle"></div>
            <div class="sparkle"></div>
            <div class="sparkle"></div>
        </div>

        <div class="max-w-4xl mx-auto relative z-10">
            <div class="glass-effect rounded-2xl shadow-2xl overflow-hidden shimmer-effect">
                <div class="grid lg:grid-cols-2">
                    <!-- Left Side - Form -->
                    <div class="p-8 bg-gray-800/50 backdrop-blur-sm">
                        <div class="mb-6">
                            <h2 class="text-2xl font-bold bg-gradient-to-r from-white to-gray-300 bg-clip-text text-transparent">Daftar Akun Baru</h2>
                            <p class="text-gray-300 mt-2">Bergabunglah dengan KursusBahasa dan mulai petualangan bahasa baru Anda</p>
                        </div>

                        @if(session('success'))
                        <div class="bg-green-500/20 border border-green-500/30 text-green-400 p-3 rounded-lg mb-6 backdrop-blur-sm">
                            {{ session('success') }}
                        </div>
                        @endif

                     <form action="{{ route('register.save') }}" method="POST" id="registerForm" class="space-y-4">
    @csrf
    <!-- Hidden field untuk role pelajar sebagai default -->
    <input type="hidden" name="role" value="pelajar">
    
    <div>
        <label class="block mb-1 text-gray-300 font-medium">Nama Lengkap</label>
        <input type="text" name="name"
            @class([
                'w-full px-4 py-2 bg-gray-800/50 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400 focus:border-gray-400 text-gray-300 input-glow backdrop-blur-sm transition-all duration-300',
                'border-red-500' => $errors->has('name'),
                'border-gray-600' => !$errors->has('name'),
            ])
            value="{{ old('name') }}" required placeholder="Masukkan nama lengkap Anda" />
        @error('name')
            <div class="text-red-400 text-sm mt-1">{{ $message }}</div>
        @enderror
    </div>
    
    <div>
        <label class="block mb-1 text-gray-300 font-medium">Email</label>
        <input type="email" name="email"
            @class([
                'w-full px-4 py-2 bg-gray-800/50 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400 focus:border-gray-400 text-gray-300 input-glow backdrop-blur-sm transition-all duration-300',
                'border-red-500' => $errors->has('email'),
                'border-gray-600' => !$errors->has('email'),
            ])
            value="{{ old('email') }}" required placeholder="Masukkan email Anda" />
        @error('email')
            <div class="text-red-400 text-sm mt-1">{{ $message }}</div>
        @enderror
    </div>
    
    <div>
        <label class="block mb-1 text-gray-300 font-medium">Alamat</label>
        <input type="text" name="address"
            @class([
                'w-full px-4 py-2 bg-gray-800/50 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400 focus:border-gray-400 text-gray-300 input-glow backdrop-blur-sm transition-all duration-300',
                'border-red-500' => $errors->has('address'),
                'border-gray-600' => !$errors->has('address'),
            ])
            value="{{ old('address') }}" required placeholder="Masukkan alamat Anda" />
        @error('address')
            <div class="text-red-400 text-sm mt-1">{{ $message }}</div>
        @enderror
    </div>
    
    <div>
        <label class="block mb-1 text-gray-300 font-medium">No HP</label>
        <input type="text" name="phone_number"
            @class([
                'w-full px-4 py-2 bg-gray-800/50 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400 focus:border-gray-400 text-gray-300 input-glow backdrop-blur-sm transition-all duration-300',
                'border-red-500' => $errors->has('phone_number'),
                'border-gray-600' => !$errors->has('phone_number'),
            ])
            value="{{ old('phone_number') }}" required placeholder="Masukkan nomor HP Anda" />
        @error('phone_number')
            <div class="text-red-400 text-sm mt-1">{{ $message }}</div>
        @enderror
    </div>
    
    <div>
        <label class="block mb-1 text-gray-300 font-medium">Password</label>
        <input type="password" name="password"
            @class([
                'w-full px-4 py-2 bg-gray-800/50 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400 focus:border-gray-400 text-gray-300 input-glow backdrop-blur-sm transition-all duration-300',
                'border-red-500' => $errors->has('password'),
                'border-gray-600' => !$errors->has('password'),
            ])
            required placeholder="Masukkan password Anda" />
        @error('password')
            <div class="text-red-400 text-sm mt-1">{{ $message }}</div>
        @enderror
    </div>
    
    <div>
        <label class="block mb-1 text-gray-300 font-medium">Konfirmasi Password</label>
        <input type="password" name="password_confirmation"
            class="w-full px-4 py-2 bg-gray-800/50 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400 focus:border-gray-400 text-gray-300 input-glow backdrop-blur-sm transition-all duration-300"
            required placeholder="Konfirmasi password Anda" />
    </div>
    
    <button type="submit"
        class="w-full btn-shimmer text-white font-semibold py-3 px-4 rounded-lg transition-all duration-300 mt-6 shadow-lg hover:shadow-gray-500/25 transform hover:scale-105">
        Daftar Sekarang
    </button>
</form>
                        
                        <p class="text-center text-gray-400 mt-6">
                            Sudah memiliki akun? 
                            <a href="{{ route('login') }}" class="text-gray-300 hover:text-white font-medium transition-colors underline">Masuk di sini</a>
                        </p>
                        
                        <p id="formMessage" class="text-sm text-center text-red-400 mt-3 hidden">
                            Semua field wajib diisi!
                        </p>
                    </div>
                    
                    <!-- Right Side - Info -->
                    <div class="hidden lg:block">
                        <div class="bg-gradient-to-br from-slate-700 to-gray-800 text-white h-full p-8 relative overflow-hidden shimmer-effect">
                            <div class="sparkle"></div>
                            <div class="sparkle"></div>
                            <div class="sparkle"></div>
                            
                            <div class="h-full flex flex-col justify-between">
                                <div>
                                    <h3 class="text-xl font-bold tracking-wider text-gray-300">KursusBahasa</h3>
                                    <p class="mt-2 text-gray-400">Pusat Kursus Bahasa Terpercaya</p>
                                </div>
                                
                                <div class="my-8">
                                    <h2 class="text-2xl font-bold mb-4 bg-gradient-to-r from-white to-gray-300 bg-clip-text text-transparent">Kenapa Bergabung dengan Kami?</h2>
                                    <ul class="space-y-3">
                                        <li class="flex items-start">
                                            <svg class="w-5 h-5 text-gray-400 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="text-gray-300">Pengajar berpengalaman & profesional</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="w-5 h-5 text-gray-400 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="text-gray-300">Metode belajar modern & interaktif</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="w-5 h-5 text-gray-400 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="text-gray-300">Sertifikat penyelesaian kursus</span>
                                        </li>
                                    </ul>
                                </div>
                                
                                <div class="glass-effect rounded-xl p-5 border border-gray-600/30">
                                    <p class="italic text-gray-300 mb-3">"KursusBahasa membantu saya menguasai bahasa Jepang dalam waktu 6 bulan. Sekarang saya bisa berkomunikasi dengan lancar untuk pekerjaan saya!"</p>
                                    <div class="flex items-center">
                                        <div class="h-10 w-10 rounded-full bg-gradient-to-r from-gray-500 to-slate-600 flex items-center justify-center font-bold text-sm text-white shadow-lg">DN</div>
                                        <div class="ml-3">
                                            <p class="font-medium text-white">Dewi Nurhaliza</p>
                                            <p class="text-xs text-gray-400">Siswa Bahasa Jepang</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if(session('success'))
    <div id="notification" class="fixed top-4 right-4 bg-green-500/80 backdrop-blur-sm text-white px-6 py-3 rounded-lg shadow-lg flex items-center transform transition-transform duration-300 ease-in-out border border-green-500/30">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
        </svg>
        {{ session('success') }}
        <button onclick="closeNotification()" class="ml-4 text-white hover:text-gray-200 transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>

    <script>
        // Auto-hide notification after 5 seconds
        setTimeout(function() {
            const notification = document.getElementById('notification');
            if (notification) {
                notification.classList.add('translate-x-full');
                setTimeout(function() {
                    notification.style.display = 'none';
                }, 300);
            }
        }, 5000);
        
        function closeNotification() {
            const notification = document.getElementById('notification');
            notification.classList.add('translate-x-full');
            setTimeout(function() {
                notification.style.display = 'none';
            }, 300);
        }
    </script>
    @endif

    <script>
        document.getElementById('registerForm').addEventListener('submit', function(event) {
            const inputs = this.querySelectorAll('input:not([type="hidden"])');
            let isValid = true;
            
            inputs.forEach(input => {
                if (!input.value.trim()) {
                    isValid = false;
                }
            });
            
            if (!isValid) {
                event.preventDefault();
                document.getElementById('formMessage').classList.remove('hidden');
            }
        });
    </script>
</body>

</html>