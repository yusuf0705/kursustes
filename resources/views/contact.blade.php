<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KursusBahasa - Pintu Gerbang Dunia Melalui Bahasa</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
  </head>
  <body class="bg-gray-50 text-gray-800 font-sans scroll-smooth">
    <!-- Navbar dengan animasi scroll -->
    <nav id="navbar" class="fixed top-0 w-full z-50 transition-all duration-300 bg-white bg-opacity-95 shadow-md">
      <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
        <!-- Logo dengan animasi -->
        <a href="#" class="flex items-center space-x-2 transform transition hover:scale-105">
          <span class="text-2xl font-bold text-blue-600">
            <i class="fas fa-language text-blue-600 mr-2"></i>
            KursusBahasa
          </span>
        </a>

        <!-- Navigasi tengah - Hanya tampil di Desktop -->
        <div class="hidden md:flex space-x-8">
          <a href="#beranda" class="text-gray-700 hover:text-blue-600 font-medium transition">Beranda</a>
          <a href="#manfaat" class="text-gray-700 hover:text-blue-600 font-medium transition">Manfaat</a>
          <a href="#kursus" class="text-gray-700 hover:text-blue-600 font-medium transition">Kursus</a>
          <a href="#testimoni" class="text-gray-700 hover:text-blue-600 font-medium transition">Testimoni</a>
          <a href="#faq" class="text-gray-700 hover:text-blue-600 font-medium transition">FAQ</a>
        </div>

        <!-- CTA Buttons -->
        <div class="flex space-x-4 items-center">
          <a href="login" class="text-gray-600 hover:text-blue-600 font-medium transition">Masuk</a>
          <a href="register" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-5 py-2 rounded-full shadow-md hover:shadow-lg transition duration-300 transform hover:scale-105">
            Daftar
          </a>
          
          <!-- Mobile Menu Toggle -->
          <button class="md:hidden text-gray-700 hover:text-blue-600" id="mobile-menu-button">
            <i class="fas fa-bars text-xl"></i>
          </button>
        </div>
      </div>
      
      <!-- Mobile Menu (hidden by default) -->
      <div class="md:hidden hidden bg-white shadow-lg py-3 px-4" id="mobile-menu">
        <div class="flex flex-col space-y-3">
          <a href="#beranda" class="text-gray-700 hover:text-blue-600 font-medium transition py-2">Beranda</a>
          <a href="#manfaat" class="text-gray-700 hover:text-blue-600 font-medium transition py-2">Manfaat</a>
          <a href="#kursus" class="text-gray-700 hover:text-blue-600 font-medium transition py-2">Kursus</a>
          <a href="#testimoni" class="text-gray-700 hover:text-blue-600 font-medium transition py-2">Testimoni</a>
          <a href="#faq" class="text-gray-700 hover:text-blue-600 font-medium transition py-2">FAQ</a>
        </div>
      </div>
    </nav>

    <!-- HERO SECTION -->
    <section id="beranda" class="relative w-full min-h-screen overflow-hidden pt-20">
      <!-- Hero content overlay -->
      <div class="absolute inset-0 bg-gradient-to-r from-blue-900 to-blue-600 opacity-80 z-10"></div>
      
      <!-- Animated background -->
      <div id="hero-carousel" class="w-full h-full absolute inset-0">
        <!-- Slide 1 -->
        <div class="carousel-slide absolute inset-0 opacity-100 transition-opacity duration-1000">
          <img src="https://source.unsplash.com/1600x900/?language,education" alt="Learning Languages" class="w-full h-full object-cover">
        </div>
        <!-- Slide 2 -->
        <div class="carousel-slide absolute inset-0 opacity-0 transition-opacity duration-1000">
          <img src="https://source.unsplash.com/1600x900/?students,classroom" alt="Students Learning" class="w-full h-full object-cover">
        </div>
        <!-- Slide 3 -->
        <div class="carousel-slide absolute inset-0 opacity-0 transition-opacity duration-1000">
          <img src="https://source.unsplash.com/1600x900/?language,global" alt="Global Communication" class="w-full h-full object-cover">
        </div>
      </div>
      
      <!-- Hero content -->
      <div class="relative z-20 max-w-7xl mx-auto px-6 h-screen flex items-center">
        <div class="w-full md:w-3/5 animate__animated animate__fadeInLeft">
          <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white leading-tight mb-6">
            Kuasai Bahasa, <br>
            <span class="text-yellow-300">Jelajahi Dunia</span>
          </h1>
          <p class="text-lg md:text-xl text-gray-200 mb-8 max-w-lg">
            Buka pintu kesempatan global dengan keterampilan bahasa. Kursus kami dirancang oleh profesional untuk membantu Anda lancar berkomunikasi dalam berbagai bahasa.
          </p>
          <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
            <a href="#kursus" class="bg-yellow-500 hover:bg-yellow-600 text-gray-900 font-bold px-8 py-4 rounded-xl shadow-lg hover:shadow-xl transition transform hover:scale-105 text-center">
              Lihat Kursus
            </a>
            <a href="#langkah" class="bg-transparent border-2 border-white text-white hover:bg-white hover:text-blue-600 font-bold px-8 py-4 rounded-xl shadow-lg hover:shadow-xl transition transform hover:scale-105 text-center">
              Cara Bergabung
            </a>
          </div>
          
          <!-- Bahasa yang ditawarkan -->
          <div class="mt-12 flex flex-wrap items-center gap-4">
            <span class="text-white text-lg font-medium">Bahasa Populer:</span>
            <div class="flex items-center space-x-4">
              <div class="flex items-center justify-center bg-white bg-opacity-20 backdrop-filter backdrop-blur-sm rounded-full p-2 w-10 h-10">
                <img src="https://cdn-icons-png.flaticon.com/128/197/197374.png" alt="English" class="w-6 h-6">
              </div>
              <div class="flex items-center justify-center bg-white bg-opacity-20 backdrop-filter backdrop-blur-sm rounded-full p-2 w-10 h-10">
                <img src="https://cdn-icons-png.flaticon.com/128/197/197604.png" alt="Japan" class="w-6 h-6">
              </div>
              <div class="flex items-center justify-center bg-white bg-opacity-20 backdrop-filter backdrop-blur-sm rounded-full p-2 w-10 h-10">
                <img src="https://cdn-icons-png.flaticon.com/128/197/197375.png" alt="China" class="w-6 h-6">
              </div>
              <div class="flex items-center justify-center bg-white bg-opacity-20 backdrop-filter backdrop-blur-sm rounded-full p-2 w-10 h-10">
                <img src="https://cdn-icons-png.flaticon.com/128/197/197582.png" alt="Korea" class="w-6 h-6">
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Scroll Down Indicator -->
      <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 z-20 text-white animate-bounce">
        <a href="#manfaat" class="flex flex-col items-center">
          <span class="mb-2 text-sm">Scroll</span>
          <i class="fas fa-chevron-down"></i>
        </a>
      </div>
    </section>

    <!-- Counter Stats Section -->
    <section class="py-12 bg-white">
      <div class="max-w-6xl mx-auto px-6 grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
        <div class="p-6 transform transition hover:scale-105">
          <div class="text-4xl font-bold text-blue-600 mb-2">15+</div>
          <p class="text-gray-600">Bahasa</p>
        </div>
        <div class="p-6 transform transition hover:scale-105">
          <div class="text-4xl font-bold text-blue-600 mb-2">5000+</div>
          <p class="text-gray-600">Pelajar</p>
        </div>
        <div class="p-6 transform transition hover:scale-105">
          <div class="text-4xl font-bold text-blue-600 mb-2">50+</div>
          <p class="text-gray-600">Pengajar Ahli</p>
        </div>
        <div class="p-6 transform transition hover:scale-105">
          <div class="text-4xl font-bold text-blue-600 mb-2">98%</div>
          <p class="text-gray-600">Tingkat Kepuasan</p>
        </div>
      </div>
    </section>

    <!-- Manfaat Section -->
    <section id="manfaat" class="py-20 bg-gradient-to-b from-blue-50 to-white">
      <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-16">
          <h2 class="text-3xl md:text-4xl font-bold mb-4">Manfaat Belajar di <span class="text-blue-600">KursusBahasa</span></h2>
          <p class="text-lg text-gray-600 max-w-2xl mx-auto">Kami hadir untuk menjadikan pembelajaran bahasa asing menjadi pengalaman menyenangkan dan bermanfaat</p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
          <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition transform hover:scale-105 duration-300 border-t-4 border-blue-600">
            <div class="mb-6 text-blue-600 w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center mx-auto">
              <i class="fas fa-user-graduate text-2xl"></i>
            </div>
            <h3 class="text-xl font-semibold mb-4 text-center">Tutor Berpengalaman</h3>
            <p class="text-gray-600 text-center">Pengajar kami adalah native speaker dan profesional bersertifikat dengan pengalaman mengajar bertahun-tahun.</p>
          </div>

          <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition transform hover:scale-105 duration-300 border-t-4 border-green-600">
            <div class="mb-6 text-green-600 w-16 h-16 rounded-full bg-green-100 flex items-center justify-center mx-auto">
              <i class="fas fa-book-open text-2xl"></i>
            </div>
            <h3 class="text-xl font-semibold mb-4 text-center">Materi Terstruktur</h3>
            <p class="text-gray-600 text-center">Kurikulum modern dan sistematis dengan materi pembelajaran yang up-to-date dan mudah diikuti.</p>
          </div>

          <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition transform hover:scale-105 duration-300 border-t-4 border-red-600">
            <div class="mb-6 text-red-600 w-16 h-16 rounded-full bg-red-100 flex items-center justify-center mx-auto">
              <i class="fas fa-comments text-2xl"></i>
            </div>
            <h3 class="text-xl font-semibold mb-4 text-center">Belajar Praktis</h3>
            <p class="text-gray-600 text-center">Fokus pada kemampuan percakapan dengan metode immersive yang efektif untuk komunikasi sehari-hari.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Kursus Section -->
    <section id="kursus" class="py-20 bg-white">
      <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-16">
          <h2 class="text-3xl md:text-4xl font-bold mb-4">Program Kursus Bahasa</h2>
          <p class="text-lg text-gray-600 max-w-2xl mx-auto">Pilih program bahasa yang sesuai dengan kebutuhan dan minat Anda</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <!-- Kursus 1: English -->
          <div class="bg-white rounded-xl shadow-lg overflow-hidden transition transform hover:scale-105 hover:shadow-xl group">
            <div class="h-48 relative overflow-hidden">
              <img src="https://source.unsplash.com/800x600/?england,london" alt="English Course" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
              <div class="absolute inset-0 bg-gradient-to-t from-blue-900 to-transparent opacity-70"></div>
              <div class="absolute bottom-4 left-4">
                <h3 class="text-xl font-bold text-white">English</h3>
                <div class="flex items-center text-yellow-300">
                  <i class="fas fa-star text-xs"></i>
                  <i class="fas fa-star text-xs"></i>
                  <i class="fas fa-star text-xs"></i>
                  <i class="fas fa-star text-xs"></i>
                  <i class="fas fa-star-half-alt text-xs"></i>
                  <span class="ml-2 text-white text-xs">(4.8)</span>
                </div>
              </div>
            </div>
            <div class="p-6">
              <div class="flex justify-between items-center mb-4">
                <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full">Paling Populer</span>
                <span class="text-gray-500 text-sm">12 minggu</span>
              </div>
              <p class="text-gray-600 text-sm mb-4">Kursus bahasa Inggris lengkap dari dasar hingga level mahir dengan fokus pada percakapan dan kemampuan menulis.</p>
              <div class="flex justify-between items-center">
                <span class="font-bold text-lg text-blue-600">Rp 1.500.000</span>
                <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition">Detail</a>
              </div>
            </div>
          </div>

          <!-- Kursus 2: Japan -->
          <div class="bg-white rounded-xl shadow-lg overflow-hidden transition transform hover:scale-105 hover:shadow-xl group">
            <div class="h-48 relative overflow-hidden">
              <img src="https://source.unsplash.com/800x600/?japan,tokyo" alt="Japanese Course" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
              <div class="absolute inset-0 bg-gradient-to-t from-blue-900 to-transparent opacity-70"></div>
              <div class="absolute bottom-4 left-4">
                <h3 class="text-xl font-bold text-white">Japan</h3>
                <div class="flex items-center text-yellow-300">
                  <i class="fas fa-star text-xs"></i>
                  <i class="fas fa-star text-xs"></i>
                  <i class="fas fa-star text-xs"></i>
                  <i class="fas fa-star text-xs"></i>
                  <i class="fas fa-star text-xs"></i>
                  <span class="ml-2 text-white text-xs">(4.9)</span>
                </div>
              </div>
            </div>
            <div class="p-6">
              <div class="flex justify-between items-center mb-4">
                <span class="bg-pink-100 text-pink-800 text-xs font-semibold px-3 py-1 rounded-full">Terfavorit</span>
                <span class="text-gray-500 text-sm">10 minggu</span>
              </div>
              <p class="text-gray-600 text-sm mb-4">Pelajari bahasa Jepang dari dasar termasuk Hiragana, Katakana, dan dasar-dasar Kanji yang penting.</p>
              <div class="flex justify-between items-center">
                <span class="font-bold text-lg text-blue-600">Rp 1.200.000</span>
                <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition">Detail</a>
              </div>
            </div>
          </div>

          <!-- Kursus 3: Mandarin -->
          <div class="bg-white rounded-xl shadow-lg overflow-hidden transition transform hover:scale-105 hover:shadow-xl group">
            <div class="h-48 relative overflow-hidden">
              <img src="https://source.unsplash.com/800x600/?china,beijing" alt="Mandarin Course" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
              <div class="absolute inset-0 bg-gradient-to-t from-blue-900 to-transparent opacity-70"></div>
              <div class="absolute bottom-4 left-4">
                <h3 class="text-xl font-bold text-white">Mandarin</h3>
                <div class="flex items-center text-yellow-300">
                  <i class="fas fa-star text-xs"></i>
                  <i class="fas fa-star text-xs"></i>
                  <i class="fas fa-star text-xs"></i>
                  <i class="fas fa-star text-xs"></i>
                  <i class="far fa-star text-xs"></i>
                  <span class="ml-2 text-white text-xs">(4.0)</span>
                </div>
              </div>
            </div>
            <div class="p-6">
              <div class="flex justify-between items-center mb-4">
                <span class="bg-red-100 text-red-800 text-xs font-semibold px-3 py-1 rounded-full">Bisnis</span>
                <span class="text-gray-500 text-sm">14 minggu</span>
              </div>
              <p class="text-gray-600 text-sm mb-4">Kursus bahasa Mandarin dengan penekanan pada percakapan bisnis dan penulisan karakter Hanzi dasar.</p>
              <div class="flex justify-between items-center">
                <span class="font-bold text-lg text-blue-600">Rp 1.400.000</span>
                <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition">Detail</a>
              </div>
            </div>
          </div>
        </div>
        
        <!-- More Courses Button -->
        <div class="text-center mt-12">
          <a href="#" class="inline-block px-8 py-3 bg-blue-600 text-white font-semibold rounded-xl hover:bg-blue-700 transition transform hover:scale-105 shadow-md hover:shadow-lg">
            Lihat Semua Kursus
            <i class="fas fa-arrow-right ml-2"></i>
          </a>
        </div>
      </div>
    </section>

    <!-- Testimoni Section -->
    <section id="testimoni" class="py-20 bg-gradient-to-b from-white to-blue-50">
      <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-16">
          <h2 class="text-3xl md:text-4xl font-bold mb-4">Apa Kata Mereka?</h2>
          <p class="text-lg text-gray-600 max-w-2xl mx-auto">Pengalaman para pelajar yang telah bergabung dengan kami</p>
        </div>
        
        <!-- Testimonial Carousel -->
        <div class="relative">
          <div id="testimonial-carousel-wrapper" class="flex transition-transform duration-700 ease-in-out">
            <!-- Slide 1 -->
            <div class="w-full flex flex-col md:flex-row justify-center gap-6 px-4 shrink-0">
              <div class="bg-white p-8 rounded-2xl shadow-lg max-w-md md:transform md:hover:scale-105 transition">
                <div class="text-yellow-400 mb-4 flex">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <p class="text-gray-600 mb-6 italic">"Kursus bahasa Jepang di sini sangat menyenangkan! Tutornya sabar dan metode ajarnya mudah dimengerti. Sekarang saya bisa menonton anime tanpa subtitle!"</p>
                <div class="flex items-center">
                  <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                    <img src="https://source.unsplash.com/100x100/?portrait,woman" alt="Sarah W." class="w-full h-full object-cover">
                  </div>
                  <div>
                    <span class="block font-semibold text-blue-600">Sarah W.</span>
                    <span class="text-sm text-gray-500">Pelajar Bahasa Jepang</span>
                  </div>
                </div>
              </div>
              
              <div class="bg-white p-8 rounded-2xl shadow-lg max-w-md md:transform md:hover:scale-105 transition mt-6 md:mt-0">
                <div class="text-yellow-400 mb-4 flex">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text-gray-600 mb-6 italic">"Sebagai professional, kursus Bahasa Inggris bisnis sangat relevan dengan pekerjaan saya. Kelas kecil dengan fokus pada presentasi dan negosiasi sangat membantu karir saya."</p>
                <div class="flex items-center">
                  <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                    <img src="https://source.unsplash.com/100x100/?portrait,man" alt="Joko S." class="w-full h-full object-cover">
                  </div>
                  <div>
                    <span class="block font-semibold text-blue-600">Joko S.</span>
                    <span class="text-sm text-gray-500">Pelajar Bahasa Inggris</span>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Slide 2 -->
            <div class="w-full flex flex-col md:flex-row justify-center gap-6 px-4 shrink-0">
              <div class="bg-white p-8 rounded-2xl shadow-lg max-w-md md:transform md:hover:scale-105 transition">
                <div class="text-yellow-400 mb-4 flex">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <p class="text-gray-600 mb-6 italic">"Belajar Mandarin di sini membuat saya mendapatkan kesempatan kerja di perusahaan multinasional. Metode pengajaran yang interaktif membuat belajar karakter Hanzi menjadi menyenangkan!"</p>
                <div class="flex items-center">
                  <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                    <img src="https://source.unsplash.com/100x100/?portrait,asian" alt="Rina T." class="w-full h-full object-cover">
                  </div>
                  <div>
                    <span class="block font-semibold text-blue-600">Rina T.</span>
                    <span class="text-sm text-gray-500">Pelajar Bahasa Mandarin</span>
                  </div>
                </div>
              </div>
              
              <div class="bg-white p-8 rounded-2xl shadow-lg max-w-md md:transform md:hover:scale-105 transition mt-6 md:mt-0">
                <div class="text-yellow-400 mb-4 flex">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
                <p class="text-gray-600 mb-6 italic">"Kursus bahasa Spanyol sangat membantu saya untuk perjalanan ke Amerika Latin. Pengajarnya native speaker dan suasana belajarnya sangat menyenangkan!"</p>
                <div class="flex items-center">
                  <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                    <img src="https://source.unsplash.com/100x100/?portrait,man" alt="Carlos M." class="w-full h-full object-cover">
                  </div>
                  <div>
                    <span class="block font-semibold text-blue-600">Carlos M.</span>
                    <span class="text-sm text-gray-500">Pelajar Bahasa Spanyol</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Carousel Navigation Dots -->
          <div class="flex justify-center mt-8 space-x-2">
            <button class="w-3 h-3 rounded-full bg-blue-600 focus:outline-none" id="testimonial-dot-0"></button>
            <button class="w-3 h-3 rounded-full bg-gray-300 focus:outline-none" id="testimonial-dot-1"></button>
          </div>
        </div>
      </div>
    </section>

    <!-- Cara Bergabung Section -->
    <section id="langkah" class="py-20 bg-white">
      <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-16">
          <h2 class="text-3xl md:text-4xl font-bold mb-4">Cara Bergabung Dengan Kami</h2>
          <p class="text-lg text-gray-600 max-w-2xl mx-auto">Mulai perjalanan bahasa Anda dengan langkah-langkah sederhana</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <!-- Step 1 -->
          <div class="bg-white p-8 rounded-2xl shadow-lg relative overflow-hidden group hover:shadow-xl transition duration-300">
            <!-- Background number -->
            <div class="absolute -right-8 -bottom-8 text-9xl font-bold text-blue-100 group-hover:text-blue-200 transition">1</div>
            <!-- Icon -->
            <div class="w-16 h-16 bg-blue-600 text-white rounded-full flex items-center justify-center mb-6 z-10 relative group-hover:bg-blue-700 transition">
              <i class="fas fa-user-plus text-2xl"></i>
            </div>
            <!-- Content -->
            <h3 class="text-xl font-bold text-gray-800"></h3>
            <!-- Continuing from the Cara Bergabung section that was cut off -->
            <h3 class="text-xl font-bold text-gray-800 mb-4 relative z-10">Daftar Akun</h3>
            <p class="text-gray-600 relative z-10">Buat akun di platform kami. Isi formulir pendaftaran dan verifikasi email Anda untuk memulai.</p>
          </div>

          <!-- Step 2 -->
          <div class="bg-white p-8 rounded-2xl shadow-lg relative overflow-hidden group hover:shadow-xl transition duration-300">
            <!-- Background number -->
            <div class="absolute -right-8 -bottom-8 text-9xl font-bold text-blue-100 group-hover:text-blue-200 transition">2</div>
            <!-- Icon -->
            <div class="w-16 h-16 bg-blue-600 text-white rounded-full flex items-center justify-center mb-6 z-10 relative group-hover:bg-blue-700 transition">
              <i class="fas fa-search text-2xl"></i>
            </div>
            <!-- Content -->
            <h3 class="text-xl font-bold text-gray-800 mb-4 relative z-10">Pilih Kursus</h3>
            <p class="text-gray-600 relative z-10">Pilih bahasa dan level yang sesuai dengan kebutuhan Anda. Kami memiliki berbagai opsi untuk pemula hingga mahir.</p>
          </div>

          <!-- Step 3 -->
          <div class="bg-white p-8 rounded-2xl shadow-lg relative overflow-hidden group hover:shadow-xl transition duration-300">
            <!-- Background number -->
            <div class="absolute -right-8 -bottom-8 text-9xl font-bold text-blue-100 group-hover:text-blue-200 transition">3</div>
            <!-- Icon -->
            <div class="w-16 h-16 bg-blue-600 text-white rounded-full flex items-center justify-center mb-6 z-10 relative group-hover:bg-blue-700 transition">
              <i class="fas fa-graduation-cap text-2xl"></i>
            </div>
            <!-- Content -->
            <h3 class="text-xl font-bold text-gray-800 mb-4 relative z-10">Mulai Belajar</h3>
            <p class="text-gray-600 relative z-10">Akses materi pembelajaran, jadwalkan sesi dengan tutor, dan mulai perjalanan bahasa baru Anda!</p>
          </div>
        </div>
        
        <!-- CTA Button -->
        <div class="text-center mt-12">
          <a href="register.html" class="inline-block px-10 py-4 bg-blue-600 text-white font-bold rounded-xl shadow-lg hover:bg-blue-700 hover:shadow-xl transition transform hover:scale-105">
            Mulai Sekarang
            <i class="fas fa-arrow-right ml-2"></i>
          </a>
        </div>
      </div>
    </section>

    <!-- Penawaran Spesial Section -->
    <section class="py-16 bg-blue-900 text-white relative overflow-hidden">
      <!-- Background Pattern -->
      <div class="absolute inset-0 z-0 opacity-10">
        <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
          <pattern id="pattern-circles" x="0" y="0" width="10" height="10" patternUnits="userSpaceOnUse" patternTransform="rotate(45)">
            <circle cx="5" cy="5" r="2" fill="currentColor" />
          </pattern>
          <rect x="0" y="0" width="100%" height="100%" fill="url(#pattern-circles)" />
        </svg>
      </div>
      
      <div class="max-w-6xl mx-auto px-6 relative z-10">
        <div class="flex flex-col md:flex-row items-center justify-between">
          <div class="mb-8 md:mb-0">
            <h2 class="text-2xl md:text-3xl font-bold mb-4">Diskon 30% untuk Pendaftar Baru!</h2>
            <p class="text-blue-200 max-w-lg">Gunakan kode promo <span class="font-bold text-yellow-400">BAHASA30</span> saat mendaftar dan dapatkan potongan 30% untuk semua program kursus.</p>
          </div>
          <div>
            <a href="#" class="inline-block bg-yellow-500 hover:bg-yellow-600 text-blue-900 font-bold px-8 py-4 rounded-xl shadow-lg hover:shadow-xl transition transform hover:scale-105">
              Dapatkan Diskon
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-20 bg-white">
      <div class="max-w-4xl mx-auto px-6">
        <div class="text-center mb-16">
          <h2 class="text-3xl md:text-4xl font-bold mb-4">Pertanyaan Umum</h2>
          <p class="text-lg text-gray-600 max-w-2xl mx-auto">Jawaban untuk pertanyaan yang sering ditanyakan</p>
        </div>
        
        <div class="space-y-6">
          <!-- FAQ Item 1 -->
          <div class="bg-white border border-gray-200 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition">
            <button class="faq-button w-full px-6 py-4 text-left font-medium text-gray-800 flex justify-between items-center focus:outline-none">
              <span>Apakah kursus ini cocok untuk pemula?</span>
              <i class="fas fa-plus text-blue-600 transition-transform faq-icon"></i>
            </button>
            <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
              <div class="px-6 py-4 border-t border-gray-100">
                <p class="text-gray-600">Ya, kami memiliki kursus khusus untuk pemula di setiap bahasa yang kami tawarkan. Kurikulum kami dirancang secara bertahap dan sistematis, sehingga sangat cocok untuk Anda yang baru memulai belajar bahasa baru.</p>
              </div>
            </div>
          </div>
          
          <!-- FAQ Item 2 -->
          <div class="bg-white border border-gray-200 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition">
            <button class="faq-button w-full px-6 py-4 text-left font-medium text-gray-800 flex justify-between items-center focus:outline-none">
              <span>Berapa lama saya bisa menguasai bahasa baru?</span>
              <i class="fas fa-plus text-blue-600 transition-transform faq-icon"></i>
            </button>
            <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
              <div class="px-6 py-4 border-t border-gray-100">
                <p class="text-gray-600">Waktu yang dibutuhkan untuk menguasai bahasa baru bervariasi tergantung pada intensitas belajar, bahasa yang dipelajari, dan bakat individual. Secara umum, untuk mencapai tingkat percakapan dasar dibutuhkan sekitar 3-6 bulan belajar rutin, sedangkan untuk tingkat mahir dibutuhkan 1-2 tahun.</p>
              </div>
            </div>
          </div>
          
          <!-- FAQ Item 3 -->
          <div class="bg-white border border-gray-200 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition">
            <button class="faq-button w-full px-6 py-4 text-left font-medium text-gray-800 flex justify-between items-center focus:outline-none">
              <span>Apakah ada sertifikat setelah menyelesaikan kursus?</span>
              <i class="fas fa-plus text-blue-600 transition-transform faq-icon"></i>
            </button>
            <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
              <div class="px-6 py-4 border-t border-gray-100">
                <p class="text-gray-600">Ya, setiap pelajar akan menerima sertifikat penyelesaian resmi setelah lulus evaluasi akhir. Sertifikat ini dapat digunakan untuk memperkaya CV dan portfolio Anda.</p>
              </div>
            </div>
          </div>
          
          <!-- FAQ Item 4 -->
          <div class="bg-white border border-gray-200 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition">
            <button class="faq-button w-full px-6 py-4 text-left font-medium text-gray-800 flex justify-between items-center focus:outline-none">
              <span>Bagaimana metode pembayaran kursus?</span>
              <i class="fas fa-plus text-blue-600 transition-transform faq-icon"></i>
            </button>
            <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
              <div class="px-6 py-4 border-t border-gray-100">
                <p class="text-gray-600">Kami menerima berbagai metode pembayaran seperti kartu kredit/debit, transfer bank, dan e-wallet (OVO, GoPay, Dana, dll). Kami juga menawarkan opsi cicilan untuk program tertentu.</p>
              </div>
            </div>
          </div>
          
          <!-- FAQ Item 5 -->
          <div class="bg-white border border-gray-200 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition">
            <button class="faq-button w-full px-6 py-4 text-left font-medium text-gray-800 flex justify-between items-center focus:outline-none">
              <span>Dapatkah saya mengubah jadwal kursus saya?</span>
              <i class="fas fa-plus text-blue-600 transition-transform faq-icon"></i>
            </button>
            <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
              <div class="px-6 py-4 border-t border-gray-100">
                <p class="text-gray-600">Ya, kami memahami bahwa Anda mungkin memiliki jadwal yang padat. Anda dapat mengubah jadwal kursus Anda melalui platform kami setidaknya 24 jam sebelum jadwal yang telah ditentukan.</p>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Contact Us -->
        <div class="text-center mt-12">
          <p class="text-gray-600 mb-4">Masih memiliki pertanyaan? Jangan ragu untuk menghubungi kami</p>
          <a href="contact.html" class="inline-block text-blue-600 font-semibold hover:text-blue-700 transition">
            Hubungi Kami <i class="fas fa-arrow-right ml-1"></i>
          </a>
        </div>
      </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-20 bg-gradient-to-r from-blue-600 to-indigo-700 text-white">
      <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Siap untuk Memulai Perjalanan Bahasa Baru?</h2>
        <p class="text-lg text-blue-100 mb-8 max-w-2xl mx-auto">Gabung dengan ribuan pelajar yang telah mengubah hidup mereka melalui kemampuan berbahasa baru. Mulai hari ini!</p>
        <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4 justify-center">
          <a href="register.html" class="inline-block px-8 py-4 bg-white text-blue-600 font-bold rounded-xl shadow-lg hover:bg-gray-100 transition transform hover:scale-105">
            Daftar Sekarang
          </a>
          <a href="#kursus" class="inline-block px-8 py-4 bg-transparent border-2 border-white text-white font-bold rounded-xl hover:bg-white hover:text-blue-600 transition transform hover:scale-105">
            Lihat Kursus
          </a>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-16 pb-6">
      <div class="max-w-6xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
          <!-- Company Info -->
          <div>
            <a href="#" class="flex items-center space-x-2 mb-6">
              <span class="text-2xl font-bold text-white">
                <i class="fas fa-language text-blue-400 mr-2"></i>
                KursusBahasa
              </span>
            </a>
            <p class="text-gray-400 mb-6">Platform pembelajaran bahasa terdepan di Indonesia dengan metode modern dan pengajar berpengalaman.</p>
            <div class="flex space-x-4">
              <a href="#" class="text-gray-400 hover:text-blue-400 transition">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="text-gray-400 hover:text-blue-400 transition">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="text-gray-400 hover:text-blue-400 transition">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#" class="text-gray-400 hover:text-blue-400 transition">
                <i class="fab fa-youtube"></i>
              </a>
            </div>
          </div>
          
          <!-- Quick Links -->
          <div>
            <h3 class="text-lg font-semibold mb-6">Link Cepat</h3>
            <ul class="space-y-3">
              <li><a href="#" class="text-gray-400 hover:text-blue-400 transition">Tentang Kami</a></li>
              <li><a href="#" class="text-gray-400 hover:text-blue-400 transition">Program Kursus</a></li>
              <li><a href="#" class="text-gray-400 hover:text-blue-400 transition">Jadwal Kelas</a></li>
              <li><a href="#" class="text-gray-400 hover:text-blue-400 transition">Testimoni</a></li>
              <li><a href="#" class="text-gray-400 hover:text-blue-400 transition">Blog</a></li>
            </ul>
          </div>
          
          <!-- Support -->
          <div>
            <h3 class="text-lg font-semibold mb-6">Dukungan</h3>
            <ul class="space-y-3">
              <li><a href="#" class="text-gray-400 hover:text-blue-400 transition">Pusat Bantuan</a></li>
              <li><a href="#" class="text-gray-400 hover:text-blue-400 transition">FAQ</a></li>
              <li><a href="#" class="text-gray-400 hover:text-blue-400 transition">Syarat & Ketentuan</a></li>
              <li><a href="#" class="text-gray-400 hover:text-blue-400 transition">Kebijakan Privasi</a></li>
              <li><a href="#" class="text-gray-400 hover:text-blue-400 transition">Kontak Kami</a></li>
            </ul>
          </div>
          
          <!-- Newsletter -->
          <div>
            <h3 class="text-lg font-semibold mb-6">Berlangganan</h3>
            <p class="text-gray-400 mb-4">Dapatkan tips belajar bahasa dan promo terbaru.</p>
            <form class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-2">
              <input type="email" placeholder="Email Anda" class="bg-gray-800 text-gray-200 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
              <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition">
                Langganan
              </button>
            </form>
          </div>
        </div>
        
        <!-- Bottom Footer -->
        <div class="pt-8 border-t border-gray-800 text-center text-gray-400 text-sm">
          <p>&copy; 2025 KursusBahasa. Hak Cipta Dilindungi.</p>
        </div>
      </div>
    </footer>

    <!-- JavaScript for animations and interactions -->
    <script>
      // Navbar scroll effect
      window.addEventListener('scroll', function() {
        const navbar = document.getElementById('navbar');
        if (window.scrollY > 50) {
          navbar.classList.add('py-2');
          navbar.classList.remove('py-4');
          navbar.classList.add('shadow-lg');
        } else {
          navbar.classList.add('py-4');
          navbar.classList.remove('py-2');
          navbar.classList.remove('shadow-lg');
        }
      });
      
      // Mobile menu toggle
      document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
      });
      
      // Hero carousel
      const carouselSlides = document.querySelectorAll('.carousel-slide');
      let currentSlide = 0;
      
      function nextSlide() {
        carouselSlides[currentSlide].classList.remove('opacity-100');
        carouselSlides[currentSlide].classList.add('opacity-0');
        
        currentSlide = (currentSlide + 1) % carouselSlides.length;
        
        carouselSlides[currentSlide].classList.remove('opacity-0');
        carouselSlides[currentSlide].classList.add('opacity-100');
      }
      
      // Change slide every 5 seconds
      setInterval(nextSlide, 5000);
      
      // Testimonial carousel
      const testimonialWrapper = document.getElementById('testimonial-carousel-wrapper');
      const testimonialDots = document.querySelectorAll('[id^="testimonial-dot-"]');
      let currentTestimonial = 0;
      
      testimonialDots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
          // Remove active class from all dots
          testimonialDots.forEach(d => d.classList.remove('bg-blue-600'));
          testimonialDots.forEach(d => d.classList.add('bg-gray-300'));
          
          // Add active class to clicked dot
          dot.classList.remove('bg-gray-300');
          dot.classList.add('bg-blue-600');
          
          // Move carousel
          testimonialWrapper.style.transform = `translateX(-${index * 100}%)`;
          currentTestimonial = index;
        });
      });
      
      // FAQ accordion
      const faqButtons = document.querySelectorAll('.faq-button');
      
      faqButtons.forEach(button => {
        button.addEventListener('click', () => {
          const answer = button.nextElementSibling;
          const icon = button.querySelector('.faq-icon');
          
          // Toggle icon
          icon.classList.toggle('transform');
          icon.classList.toggle('rotate-45');
          
          // Toggle answer visibility
          if (answer.style.maxHeight) {
            answer.style.maxHeight = null;
          } else {
            answer.style.maxHeight = answer.scrollHeight + 'px';
          }
        });
      });
      
      // Smooth scrolling for anchor links
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
          e.preventDefault();
          
          const targetId = this.getAttribute('href');
          const targetElement = document.querySelector(targetId);
          
          if (targetElement) {
            window.scrollTo({
              top: targetElement.offsetTop - 80,
              behavior: 'smooth'
            });
            
            // Close mobile menu if open
            const mobileMenu = document.getElementById('mobile-menu');
            if (!mobileMenu.classList.contains('hidden')) {
              mobileMenu.classList.add('hidden');
            }
          }
        });
      });
      
      // Animation on scroll
      const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
      };
      
      const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('animate__animated');
            entry.target.classList.add(entry.target.dataset.animation);
            observer.unobserve(entry.target);
          }
        });
      }, observerOptions);
      
      document.querySelectorAll('[data-animation]').forEach(element => {
        observer.observe(element);
      });
    </script>
  </body>
</html>