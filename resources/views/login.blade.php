<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lupa Password - KursusBahasa</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
  </head>
  <body class="bg-gray-50 text-gray-800 font-sans">
    <!-- Navbar minimal -->
    <nav class="w-full bg-white shadow-md">
      <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
        <!-- Logo -->
        <a href="index.html" class="flex items-center space-x-2 transform transition hover:scale-105">
          <span class="text-2xl font-bold text-blue-600">
            <i class="fas fa-language text-blue-600 mr-2"></i>
            KursusBahasa
          </span>
        </a>

        <!-- Back to Login -->
        <a href="login.html" class="text-gray-600 hover:text-blue-600 font-medium transition">
          <i class="fas fa-arrow-left mr-2"></i>
          Kembali ke Halaman Masuk
        </a>
      </div>
    </nav>

    <!-- Forgot Password Section -->
    <section class="py-16 md:py-24">
      <div class="max-w-md mx-auto px-6">
        <!-- Card -->
        <div class="bg-white rounded-2xl shadow-xl p-8 animate__animated animate__fadeIn">
          <!-- Header -->
          <div class="text-center mb-8">
            <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
              <i class="fas fa-key text-blue-600 text-3xl"></i>
            </div>
            <h1 class="text-2xl font-bold text-gray-800">Lupa Password?</h1>
            <p class="text-gray-600 mt-2">Jangan khawatir, kami akan membantu Anda untuk mereset password.</p>
          </div>

          <!-- Step Indicator -->
          <div class="flex items-center justify-center mb-8">
            <div class="flex items-center">
              <div class="w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center font-semibold text-sm">1</div>
              <div class="h-1 w-12 bg-blue-200 mx-2"></div>
              <div class="w-8 h-8 rounded-full bg-blue-200 text-gray-600 flex items-center justify-center font-semibold text-sm">2</div>
              <div class="h-1 w-12 bg-blue-200 mx-2"></div>
              <div class="w-8 h-8 rounded-full bg-blue-200 text-gray-600 flex items-center justify-center font-semibold text-sm">3</div>
            </div>
          </div>

          <!-- Form -->
          <form id="forgotPasswordForm">
            <div class="mb-6">
              <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
              <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                  <i class="fas fa-envelope text-gray-400"></i>
                </div>
                <input 
                  type="email" 
                  id="email" 
                  name="email" 
                  class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition"
                  placeholder="Masukkan email terdaftar Anda"
                  required
                >
              </div>
              <p class="text-xs text-gray-500 mt-2">
                Link reset password akan dikirimkan ke email ini.
              </p>
            </div>

            <!-- Anti-spam Verification -->
            <div class="mb-6">
              <label class="block text-gray-700 font-medium mb-2">Verifikasi</label>
              <div class="flex items-center space-x-4">
                <div class="bg-gray-100 px-4 py-2 rounded-lg">
                  <span class="text-gray-700 font-semibold select-none" id="captchaText">KURSUS7</span>
                </div>
                <button type="button" id="refreshCaptcha" class="text-blue-600 hover:text-blue-800">
                  <i class="fas fa-sync-alt"></i>
                </button>
              </div>
              <div class="mt-2">
                <input 
                  type="text" 
                  id="captcha" 
                  name="captcha" 
                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition"
                  placeholder="Masukkan kode di atas"
                  required
                >
              </div>
            </div>

            <!-- Submit Button -->
            <button 
              type="submit" 
              class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-lg shadow-md hover:shadow-lg transition transform hover:scale-105"
            >
              Kirim Link Reset Password
            </button>
          </form>

          <!-- Other Options -->
          <div class="mt-6 text-center">
            <p class="text-gray-600">
              Ingat password? 
              <a href="login.html" class="text-blue-600 hover:underline font-medium">Masuk di sini</a>
            </p>
          </div>
        </div>

        <!-- Step Instructions -->
        <div class="mt-8">
          <h3 class="text-lg font-semibold text-gray-800 mb-4">Cara Reset Password:</h3>
          <ul class="space-y-3">
            <li class="flex items-start">
              <div class="w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center text-xs mr-3 mt-0.5">1</div>
              <p class="text-gray-600">Masukkan email yang terdaftar di akun KursusBahasa Anda</p>
            </li>
            <li class="flex items-start">
              <div class="w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center text-xs mr-3 mt-0.5">2</div>
              <p class="text-gray-600">Cek inbox email Anda untuk link reset password</p>
            </li>
            <li class="flex items-start">
              <div class="w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center text-xs mr-3 mt-0.5">3</div>
              <p class="text-gray-600">Buat password baru melalui link yang diberikan</p>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- Simple Footer -->
    <footer class="bg-gray-900 text-white py-6">
      <div class="max-w-7xl mx-auto px-6 text-center">
        <p class="text-gray-400 text-sm">&copy; 2025 KursusBahasa. Hak Cipta Dilindungi.</p>
        <div class="flex justify-center space-x-4 mt-3">
          <a href="#" class="text-gray-400 hover:text-blue-400 transition">Syarat & Ketentuan</a>
          <span class="text-gray-600">•</span>
          <a href="#" class="text-gray-400 hover:text-blue-400 transition">Kebijakan Privasi</a>
          <span class="text-gray-600">•</span>
          <a href="#" class="text-gray-400 hover:text-blue-400 transition">Bantuan</a>
        </div>
      </div>
    </footer>

    <!-- JavaScript for interactions -->
    <script>
      // Form submission
      document.getElementById('forgotPasswordForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const email = document.getElementById('email').value;
        const captchaInput = document.getElementById('captcha').value;
        const captchaText = document.getElementById('captchaText').textContent;
        
        // Validate captcha
        if (captchaInput.toUpperCase() !== captchaText) {
          alert('Kode verifikasi tidak valid. Silakan coba lagi.');
          return;
        }
        
        // Show loading state
        const submitButton = this.querySelector('button[type="submit"]');
        const originalText = submitButton.textContent;
        submitButton.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Mengirim...';
        submitButton.disabled = true;
        
        // Simulate API call with setTimeout
        setTimeout(() => {
          // Reset button
          submitButton.innerHTML = originalText;
          submitButton.disabled = false;
          
          // Show success message and redirect to verification page
          showSuccessMessage(email);
        }, 1500);
      });
      
      // Refresh captcha
      document.getElementById('refreshCaptcha').addEventListener('click', function() {
        const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        let result = '';
        for (let i = 0; i < 7; i++) {
          result += characters.charAt(Math.floor(Math.random() * characters.length));
        }
        document.getElementById('captchaText').textContent = result;
      });
      
      // Show success message function
      function showSuccessMessage(email) {
        const formContainer = document.getElementById('forgotPasswordForm').parentElement;
        
        // Create success message
        const successMessage = document.createElement('div');
        successMessage.className = 'text-center animate__animated animate__fadeIn';
        successMessage.innerHTML = `
          <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <i class="fas fa-check text-green-600 text-3xl"></i>
          </div>
          <h2 class="text-xl font-bold text-gray-800 mb-2">Email Terkirim!</h2>
          <p class="text-gray-600 mb-6">
            Kami telah mengirimkan email dengan tautan reset password ke:<br>
            <span class="font-semibold">${email}</span>
          </p>
          <div class="bg-blue-50 rounded-lg p-4 mb-6">
            <p class="text-sm text-blue-800">
              <i class="fas fa-info-circle mr-2"></i>
              Link reset password akan kadaluarsa dalam 30 menit.
            </p>
          </div>
          <a href="login.html" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg shadow-md hover:shadow-lg transition transform hover:scale-105">
            Kembali ke Halaman Masuk
          </a>
        `;
        
        // Replace form with success message
        formContainer.innerHTML = '';
        formContainer.appendChild(successMessage);
        
        // Update step indicator
        const stepIndicator = document.querySelector('.flex.items-center');
        stepIndicator.innerHTML = `
          <div class="w-8 h-8 rounded-full bg-green-600 text-white flex items-center justify-center font-semibold text-sm">
            <i class="fas fa-check"></i>
          </div>
          <div class="h-1 w-12 bg-blue-200 mx-2"></div>
          <div class="w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center font-semibold text-sm">2</div>
          <div class="h-1 w-12 bg-blue-200 mx-2"></div>
          <div class="w-8 h-8 rounded-full bg-blue-200 text-gray-600 flex items-center justify-center font-semibold text-sm">3</div>
        `;
      }
    </script>
  </body>
</html>