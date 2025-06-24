<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - KursusBahasa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gradient-to-r from-blue-500 to-purple-600 py-10">

    <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-lg shadow-xl overflow-hidden">
            <div class="grid lg:grid-cols-2">
                <!-- Left Side - Form -->
                <div class="p-8">
                    <div class="mb-6">
                        <h2 class="text-2xl font-bold text-gray-800">Daftar Akun Baru</h2>
                        <p class="text-gray-600 mt-2">Bergabunglah dengan KursusBahasa dan mulai petualangan bahasa baru Anda</p>
                    </div>

                    @if(session('success'))
                    <div class="bg-green-100 text-green-700 p-3 rounded-lg mb-6">
                        {{ session('success') }}
                    </div>
                    @endif

                    <form action="{{ route('register.save') }}" method="POST" id="registerForm" class="space-y-4">
                        @csrf
                        <!-- Hidden field untuk menetapkan role pelajar secara default -->
                        <div>
                            <select name="role" required>
                                <option value="pelajar">Pelajar</option>
                                <option value="tutor">Tutor</option>
                                <option value="admin">Admin</option>

                            </select>
                         </div>
                        
                        <div>
                            <label class="block mb-1 text-gray-700 font-medium">Nama Lengkap</label>
                            <input type="text" name="name" 
                                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 @error('name') border-red-500 @enderror" 
                                value="{{ old('name') }}" required />
                            @error('name')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div>
                            <label class="block mb-1 text-gray-700 font-medium">Email</label>
                            <input type="email" name="email" 
                                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 @error('email') border-red-500 @enderror" 
                                value="{{ old('email') }}" required />
                            @error('email')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div>
                            <label class="block mb-1 text-gray-700 font-medium">Alamat</label>
                            <input type="text" name="address" 
                                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 @error('address') border-red-500 @enderror" 
                                value="{{ old('address') }}" required />
                            @error('address')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div>
                            <label class="block mb-1 text-gray-700 font-medium">No HP</label>
                            <input type="text" name="phone_number" 
                                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 @error('phone_number') border-red-500 @enderror" 
                                value="{{ old('phone_number') }}" required />
                            @error('phone_number')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div>
                            <label class="block mb-1 text-gray-700 font-medium">Password</label>
                            <input type="password" name="password" 
                                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 @error('password') border-red-500 @enderror" 
                                required />
                            @error('password')
                                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div>
                            <label class="block mb-1 text-gray-700 font-medium">Konfirmasi Password</label>
                            <input type="password" name="password_confirmation" 
                                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400" 
                                required />
                        </div>
                        
                        <button type="submit" 
                            class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-4 rounded-lg transition duration-300 mt-2">
                            Daftar Sekarang
                        </button>
                    </form>
                    
                    <p class="text-center text-gray-600 mt-6">
                        Sudah memiliki akun? 
                        <a href="{{ route('login') }}" class="text-indigo-600 hover:underline font-medium">Masuk di sini</a>
                    </p>
                    
                    <p id="formMessage" class="text-sm text-center text-red-500 mt-3 hidden">
                        Semua field wajib diisi!
                    </p>
                </div>
                
                <!-- Right Side - Image and Info -->
                <div class="hidden lg:block bg-indigo-600 text-white p-8">
                    <div class="h-full flex flex-col justify-between">
                        <div>
                            <h3 class="text-xl font-bold tracking-wider">KursusBahasa</h3>
                            <p class="mt-2 text-indigo-200">Pusat Kursus Bahasa Terpercaya</p>
                        </div>
                        
                        <div class="my-8">
                            <h2 class="text-2xl font-bold mb-4">Kenapa Bergabung dengan Kami?</h2>
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-indigo-300 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Pengajar berpengalaman & profesional</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-indigo-300 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Metode belajar modern & interaktif</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-indigo-300 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Sertifikat penyelesaian kursus</span>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="bg-indigo-700 rounded-lg p-5">
                            <p class="italic text-indigo-200 mb-3">"KursusBahasa membantu saya menguasai bahasa Jepang dalam waktu 6 bulan. Sekarang saya bisa berkomunikasi dengan lancar untuk pekerjaan saya!"</p>
                            <div class="flex items-center">
                                <div class="h-10 w-10 rounded-full bg-indigo-500 flex items-center justify-center font-bold text-sm">DN</div>
                                <div class="ml-3">
                                    <p class="font-medium">Dewi Nurhaliza</p>
                                    <p class="text-xs text-indigo-300">Siswa Bahasa Jepang</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if(session('success'))
    <div id="notification" class="fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg flex items-center transform transition-transform duration-300 ease-in-out">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
        </svg>
        {{ session('success') }}
        <button onclick="closeNotification()" class="ml-4 text-white">
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