<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>KursusBahasa - Pintu Gerbang Dunia Melalui Bahasa</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
  <style>
    /* Hero Carousel Styles */
    .carousel-slide {
      transition: opacity 0.5s ease-in-out;
      position: absolute;
      inset: 0;
      opacity: 0;
      z-index: 0;
    }
    .carousel-slide.active {
      opacity: 1;
      z-index: 10;
    }
    
    /* Testimonial Carousel Styles */
    .testimonial-container {
      overflow: hidden;
      position: relative;
      width: 100%;
    }
    .testimonial-wrapper {
      display: flex;
      transition: transform 0.5s ease-in-out;
    }
    .testimonial-slide {
      flex: 0 0 100%;
      width: 100%;
    }
    .testimonial-dots {
      display: flex;
      justify-content: center;
      margin-top: 1rem;
    }
    .testimonial-dot {
      height: 10px;
      width: 10px;
      margin: 0 5px;
      border-radius: 50%;
      background-color: #CBD5E0;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    .testimonial-dot.active {
      background-color: #3B82F6;
    }
    
    /* Responsive fixes for testimonials */
    @media (max-width: 768px) {
      .testimonial-card-container {
        flex-direction: column;
      }
      .testimonial-card {
        margin-bottom: 1rem;
        width: 100%;
      }
    }
  </style>
</head>
<body class="bg-gray-50 text-gray-800 font-sans scroll-smooth">
  <!-- Navbar -->
  <nav id="navbar" class="fixed top-0 w-full z-50 transition-all duration-300 bg-white bg-opacity-95 shadow-md">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
      <a href="#" class="flex items-center space-x-2 transform transition hover:scale-105">
        <span class="text-2xl font-bold text-blue-600">
          <i class="fas fa-language text-blue-600 mr-2"></i>
          KursusBahasa
        </span>
      </a>

      <div class="hidden md:flex space-x-8">
        <a href="#beranda" class="text-gray-700 hover:text-blue-600 font-medium transition">Beranda</a>
        <a href="#manfaat" class="text-gray-700 hover:text-blue-600 font-medium transition">Manfaat</a>
        <a href="#kursus" class="text-gray-700 hover:text-blue-600 font-medium transition">Kursus</a>
        <a href="#testimoni" class="text-gray-700 hover:text-blue-600 font-medium transition">Testimoni</a>
        <a href="#faq" class="text-gray-700 hover:text-blue-600 font-medium transition">FAQ</a>
      </div>

      <div class="flex space-x-4 items-center">
        <a href="login" class="text-gray-600 hover:text-blue-600 font-medium transition">Masuk</a>
        <a href="register" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-5 py-2 rounded-full shadow-md hover:shadow-lg transition duration-300 transform hover:scale-105">
          Daftar
        </a>
        
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

  <!-- SPACER agar isi tidak ketutup navbar -->
  <div class="h-20"></div>
  
  <!-- HERO SECTION -->
  <section id="beranda" class="relative w-full min-h-screen overflow-hidden pt-20">
    <!-- Hero content overlay -->
    <div class="absolute inset-0 bg-gradient-to-r from-gray-900 to-gray-600 opacity-80 z-10"></div>
    
    <!-- Animated background -->
    <div id="hero-carousel" class="w-full h-full absolute inset-0">
      <!-- Slides will be inserted here -->
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
  </section>

  <!-- Manfaat Section -->
<main>
  <section id="manfaat" class="pt-32 pb-20 bg-gray-100">
    <div class="max-w-6xl mx-auto px-6">
      <h2 class="text-3xl font-bold text-center mb-12" data-aos="fade-up">Manfaat Belajar di Tempat Kami</h2>
      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition transform hover:scale-105 duration-300" data-aos="fade-up" data-aos-delay="100">
          <div class="mb-3 text-blue-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0v6m0-6l-9 5m9-5l9 5" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold mb-2">Tutor Berpengalaman</h3>
          <p class="text-gray-600">Tutor profesional dan ramah, siap membimbing Anda dari dasar hingga mahir.</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition transform hover:scale-105 duration-300" data-aos="fade-up" data-aos-delay="200">
          <div class="mb-3 text-green-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6h13m0 0L16 4m6 7l-6 7" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold mb-2">Materi Terstruktur</h3>
          <p class="text-gray-600">Kurikulum modern dan sistematis, materi disusun untuk pembelajaran optimal.</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition transform hover:scale-105 duration-300" data-aos="fade-up" data-aos-delay="300">
          <div class="mb-3 text-red-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L8.5 21m0 0L7.25 17m1.25 4h3.5m3.5-16l1.25 4m0 0L16.5 7m1.25 4h-3.5" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold mb-2">Belajar Praktis</h3>
          <p class="text-gray-600">Latihan langsung yang menyenangkan, cocok untuk percakapan sehari-hari.</p>
        </div>
      </div>
    </div>
  </section>
</main>

<!-- SECTION: Kursus -->
<section id="kursus" class="py-16 bg-white">
    <div class="container mx-auto px-4">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold mb-3">Kursus</h2>
        <p class="text-gray-600 text-lg">Kami menyediakan berbagai kursus bahasa untuk semua kebutuhan</p>
      </div>
      
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Kursus 1: English -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300 transform hover:scale-105">
          <div class="h-48 overflow-hidden bg-blue-50">
            <svg class="w-full h-full" viewBox="0 0 60 30" xmlns="http://www.w3.org/2000/svg">
              <!-- British Flag (Union Jack) -->
              <rect width="60" height="30" fill="#00247d"/>
              <path d="M0,0 L60,30 M60,0 L0,30" stroke="#fff" stroke-width="6"/>
              <path d="M30,0 L30,30 M0,15 L60,15" stroke="#fff" stroke-width="10"/>
              <path d="M30,0 L30,30 M0,15 L60,15" stroke="#cf142b" stroke-width="6"/>
              <path d="M0,0 L60,30 M60,0 L0,30" stroke="#cf142b" stroke-width="4"/>
            </svg>
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold text-blue-600 mb-2">English</h3>
            <p class="text-gray-600 mb-4">Deskripsi kursus bahasa Inggris. Kursus ini akan membantu Anda mempelajari dasar-dasar hingga level lanjutan.</p>
            <div class="flex justify-between items-center">
              <span class="text-sm font-medium text-gray-500">Durasi: 12 minggu</span>
              <span class="font-semibold text-blue-700">Rp 1.500.000</span>
            </div>
          </div>
        </div>

        <!-- Kursus 2: Japan -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300 transform hover:scale-105">
          <div class="h-48 overflow-hidden bg-red-50">
            <svg class="w-full h-full" viewBox="0 0 900 600" xmlns="http://www.w3.org/2000/svg">
              <!-- Japanese Flag -->
              <rect width="900" height="600" fill="#fff"/>
              <circle cx="450" cy="300" r="180" fill="#bc002d"/>
            </svg>
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold text-red-600 mb-2">Japan</h3>
            <p class="text-gray-600 mb-4">Deskripsi kursus bahasa Jepang. Anda akan belajar menulis kanji dan berbicara dengan orang Jepang.</p>
            <div class="flex justify-between items-center">
              <span class="text-sm font-medium text-gray-500">Durasi: 10 minggu</span>
              <span class="font-semibold text-red-700">Rp 1.200.000</span>
            </div>
          </div>
        </div>
        
        <!-- Kursus 3: Mandarin -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300 transform hover:scale-105">
          <div class="h-48 overflow-hidden">
            <img src="https://media.scoutwiki.org/images/9/96/Flag_of_China.svg" alt="Chinese Flag" class="w-full h-full object-cover"/>
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold text-yellow-600 mb-2">Mandarin</h3>
            <p class="text-gray-600 mb-4">Kursus bahasa Mandarin, fokus pada percakapan sehari-hari dan mengenal budaya Tiongkok.</p>
            <div class="flex justify-between items-center">
              <span class="text-sm font-medium text-gray-500">Durasi: 14 minggu</span>
              <span class="font-semibold text-yellow-700">Rp 1.400.000</span>
            </div>
          </div>
        </div>
        
        <!-- Kursus 4: Korea -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300 transform hover:scale-105">
          <div class="h-48 overflow-hidden bg-purple-50">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/09/Flag_of_South_Korea.svg/1200px-Flag_of_South_Korea.svg.png" alt="Korean Flag" class="w-full h-full object-cover"/>
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold text-purple-600 mb-2">Korea</h3>
            <p class="text-gray-600 mb-4">Belajar bahasa Korea dengan fokus pada percakapan dan tata bahasa dasar.</p>
            <div class="flex justify-between items-center">
              <span class="text-sm font-medium text-gray-500">Durasi: 16 minggu</span>
              <span class="font-semibold text-purple-700">Rp 1.600.000</span>
            </div>
          </div>
        </div>

        <!-- Kursus 5: Spanyol -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300 transform hover:scale-105">
          <div class="h-48 overflow-hidden bg-yellow-50">
            <img src="https://4.bp.blogspot.com/-blD0qeeVKrc/WqtpQW0QaXI/AAAAAAAAJ5U/1azRwDe5VNMwagF8dxmyN_0FlQ8aBymugCLcBGAs/s1600/Spain%2BFlag.png" alt="Spanish Flag" class="w-full h-full object-cover"/>
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold text-orange-600 mb-2">Spanyol</h3>
            <p class="text-gray-600 mb-4">Kursus bahasa Spanyol, belajar percakapan dasar hingga lanjutan.</p>
            <div class="flex justify-between items-center">
              <span class="text-sm font-medium text-gray-500">Durasi: 12 minggu</span>
              <span class="font-semibold text-orange-700">Rp 1.350.000</span>
            </div>
          </div>
        </div>

        <!-- Kursus 6: Germany -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300 transform hover:scale-105">
          <div class="h-48 overflow-hidden bg-gray-50">
            <svg class="w-full h-full" viewBox="0 0 5 3" xmlns="http://www.w3.org/2000/svg">
              <!-- German Flag -->
              <rect width="5" height="3" fill="#000"/>
              <rect width="5" height="2" y="1" fill="#D00"/>
              <rect width="5" height="1" y="2" fill="#FFCE00"/>
            </svg>
          </div>
          <div class="p-6">
            <h3 class="text-xl font-bold text-green-600 mb-2">Germany</h3>
            <p class="text-gray-600 mb-4">Belajar bahasa Jerman dari dasar hingga mahir, dengan penekanan pada percakapan.</p>
            <div class="flex justify-between items-center">
              <span class="text-sm font-medium text-gray-500">Durasi: 18 minggu</span>
              <span class="font-semibold text-green-700">Rp 1.750.000</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- SECTION: Testimoni (DIPERBARUI) -->
  <section id="testimoni" class="bg-gray-50 py-16">
    <div class="max-w-6xl mx-auto text-center px-4">
      <h2 class="text-3xl font-bold mb-4">Apa Kata Mereka?</h2>
      <p class="text-gray-600 mt-2 mb-12">Lihat pengalaman beberapa siswa yang telah belajar bersama kami.</p>

      <!-- Carousel Controls -->
      <div class="flex justify-between items-center mb-6">
        <button id="testimonial-prev" class="bg-white hover:bg-blue-100 text-blue-600 p-2 rounded-full shadow transition">
          <i class="fas fa-chevron-left"></i>
        </button>
        <div id="testimonial-dots" class="testimonial-dots">
          <!-- Dots will be added here via JavaScript -->
        </div>
        <button id="testimonial-next" class="bg-white hover:bg-blue-100 text-blue-600 p-2 rounded-full shadow transition">
          <i class="fas fa-chevron-right"></i>
        </button>
      </div>

      <!-- Testimonial Carousel - Improved -->
      <div class="testimonial-container">
        <div id="testimonial-carousel" class="testimonial-wrapper">
          <!-- Slide 1 -->
          <div class="testimonial-slide">
            <div class="flex flex-wrap justify-center gap-6 testimonial-card-container">
              <div class="bg-white p-6 rounded-lg shadow-md max-w-xs w-full testimonial-card">
                <div class="text-yellow-500 mb-3">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <p class="text-gray-600 mb-4">"Kursus bahasa Jepang sangat membantu saya. Berkat ini saya bisa mendapatkan pekerjaan di Jepang"</p>
                <div class="flex items-center justify-center">
                  <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                    <span class="text-blue-600 font-bold">SW</span>
                  </div>
                  <div class="text-left">
                    <span class="block font-semibold text-blue-600">Sarah W.</span>
                    <span class="text-sm text-gray-500">Bahasa Jepang</span>
                  </div>
                </div>
              </div>

              <div class="bg-white p-6 rounded-lg shadow-md max-w-xs w-full testimonial-card">
                <div class="text-yellow-500 mb-3">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text-gray-600 mb-4">"Saya lebih percaya diri berbahasa Inggris setelah mengikuti program intensif di KursusBahasa."</p>
                <div class="flex items-center justify-center">
                  <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-3">
                    <span class="text-green-600 font-bold">JS</span>
                  </div>
                  <div class="text-left">
                    <span class="block font-semibold text-blue-600">Joko S.</span>
                    <span class="text-sm text-gray-500">Bahasa Inggris</span>
                  </div>
                </div>
              </div>

              <div class="bg-white p-6 rounded-lg shadow-md max-w-xs w-full testimonial-card">
                <div class="text-yellow-500 mb-3">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <p class="text-gray-600 mb-4">"Bahasa Mandarin membuka peluang kerja saya di perusahaan multinasional. Terima kasih KursusBahasa!"</p>
                <div class="flex items-center justify-center">
                  <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mr-3">
                    <span class="text-red-600 font-bold">RT</span>
                  </div>
                  <div class="text-left">
                    <span class="block font-semibold text-blue-600">Rina T.</span>
                    <span class="text-sm text-gray-500">Bahasa Mandarin</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="testimonial-slide">
            <div class="flex flex-wrap justify-center gap-6 testimonial-card-container">
              <div class="bg-white p-6 rounded-lg shadow-md max-w-xs w-full testimonial-card">
                <div class="text-yellow-500 mb-3">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <p class="text-gray-600 mb-4">"Bahasa Inggris di sini membantu karir saya. Metode pengajarannya sangat efektif dan menyenangkan."</p>
                <div class="flex items-center justify-center">
                  <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mr-3">
                    <span class="text-purple-600 font-bold">AP</span>
                  </div>
                  <div class="text-left">
                    <span class="block font-semibold text-blue-600">Andi P.</span>
                    <span class="text-sm text-gray-500">Bahasa Inggris</span>
                  </div>
                </div>
              </div>

              <div class="bg-white p-6 rounded-lg shadow-md max-w-xs w-full testimonial-card">
                <div class="text-yellow-500 mb-3">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
                
          <p class="text-gray-600 mb-4">"Belajar bahasa Spanyol sangat menyenangkan di sini. Para pengajar sangat perhatian dan selalu memberikan motivasi."</p>
                <div class="flex items-center justify-center">
                  <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center mr-3">
                    <span class="text-yellow-600 font-bold">DM</span>
                  </div>
                  <div class="text-left">
                    <span class="block font-semibold text-blue-600">Dinda M.</span>
                    <span class="text-sm text-gray-500">Bahasa Spanyol</span>
                  </div>
                </div>
              </div>

              <div class="bg-white p-6 rounded-lg shadow-md max-w-xs w-full testimonial-card">
                <div class="text-yellow-500 mb-3">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <p class="text-gray-600 mb-4">"Saya suka metode pengajaran bahasa Korea di sini, sangat praktis dan relevan dengan kebutuhan saya."</p>
                <div class="flex items-center justify-center">
                  <div class="w-12 h-12 bg-pink-100 rounded-full flex items-center justify-center mr-3">
                    <span class="text-pink-600 font-bold">LH</span>
                  </div>
                  <div class="text-left">
                    <span class="block font-semibold text-blue-600">Lisa H.</span>
                    <span class="text-sm text-gray-500">Bahasa Korea</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


<!-- SECTION: FAQ -->
<section id="faq" class="py-16 bg-white">
  <div class="max-w-4xl mx-auto px-4">
    <h2 class="text-3xl font-bold text-center mb-12">Pertanyaan Umum</h2>
    
    <div class="space-y-6">
      <!-- FAQ Item 1 -->
      <div id="faq-item-1" class="faq-item border border-gray-200 rounded-lg overflow-hidden">
        <button id="faq-toggle-1" class="faq-toggle w-full text-left p-4 focus:outline-none flex justify-between items-center">
          <span class="font-medium text-lg">Berapa lama waktu belajar yang dibutuhkan?</span>
          <i class="fas fa-chevron-down text-blue-500 transition-transform transform"></i>
        </button>
        <div id="faq-content-1" class="faq-content hidden px-4 pb-4">
          <p class="text-gray-600">
            Durasi kursus bervariasi tergantung bahasa dan level yang dipilih. Umumnya kursus kami berlangsung antara 10-18 minggu dengan pertemuan 2-3 kali seminggu. Kami juga menawarkan program intensif dan privat yang dapat disesuaikan dengan kebutuhan Anda.
          </p>
        </div>
      </div>
      
      <!-- FAQ Item 2 -->
      <div id="faq-item-2" class="faq-item border border-gray-200 rounded-lg overflow-hidden">
        <button id="faq-toggle-2" class="faq-toggle w-full text-left p-4 focus:outline-none flex justify-between items-center">
          <span class="font-medium text-lg">Apakah ada ujian sertifikasi?</span>
          <i class="fas fa-chevron-down text-blue-500 transition-transform transform"></i>
        </button>
        <div id="faq-content-2" class="faq-content hidden px-4 pb-4">
          <p class="text-gray-600">
            Ya, setiap kursus diakhiri dengan ujian sertifikasi internal. Kami juga mempersiapkan siswa untuk ujian sertifikasi internasional seperti TOEFL, JLPT, HSK, dan TOPIK sesuai bahasa yang dipelajari.
          </p>
        </div>
      </div>
      
      <!-- FAQ Item 3 -->
      <div id="faq-item-3" class="faq-item border border-gray-200 rounded-lg overflow-hidden">
        <button id="faq-toggle-3" class="faq-toggle w-full text-left p-4 focus:outline-none flex justify-between items-center">
          <span class="font-medium text-lg">Bisakah saya mengambil kursus secara online?</span>
          <i class="fas fa-chevron-down text-blue-500 transition-transform transform"></i>
        </button>
        <div id="faq-content-3" class="faq-content hidden px-4 pb-4">
          <p class="text-gray-600">
            Tentu saja! Kami menyediakan kursus dengan format online dan offline. Kursus online dilakukan melalui platform video conference dengan materi yang sama seperti kelas tatap muka.
          </p>
        </div>
      </div>
      
      <!-- FAQ Item 4 -->
      <div id="faq-item-4" class="faq-item border border-gray-200 rounded-lg overflow-hidden">
        <button id="faq-toggle-4" class="faq-toggle w-full text-left p-4 focus:outline-none flex justify-between items-center">
          <span class="font-medium text-lg">Bagaimana cara mendaftar?</span>
          <i class="fas fa-chevron-down text-blue-500 transition-transform transform"></i>
        </button>
        <div id="faq-content-4" class="faq-content hidden px-4 pb-4">
          <p class="text-gray-600">
            Pendaftaran dapat dilakukan secara online melalui website ini atau langsung mengunjungi kantor kami. Klik tombol "Daftar" pada halaman ini untuk memulai proses pendaftaran online.
          </p>
        </div>
      </div>
      
    </div>
  </div>
</section>
  <!-- SECTION: Langkah Mendaftar -->
  <section id="langkah" class="py-16 bg-blue-50">
    <div class="max-w-5xl mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-12">Cara Bergabung</h2>
      
      <div class="flex flex-wrap justify-center">
        <!-- Step 1 -->
        <div class="w-full md:w-1/3 px-4 mb-8">
          <div class="bg-white p-6 rounded-lg shadow-md text-center hover:shadow-lg transition">
            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
              <span class="text-blue-600 text-2xl font-bold">1</span>
            </div>
            <h3 class="text-xl font-semibold mb-3">Pilih Kursus</h3>
            <p class="text-gray-600">Tentukan bahasa dan level yang ingin Anda pelajari</p>
          </div>
        </div>
        
        <!-- Step 2 -->
        <div class="w-full md:w-1/3 px-4 mb-8">
          <div class="bg-white p-6 rounded-lg shadow-md text-center hover:shadow-lg transition">
            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
              <span class="text-blue-600 text-2xl font-bold">2</span>
            </div>
            <h3 class="text-xl font-semibold mb-3">Daftar Online</h3>
            <p class="text-gray-600">Isi formulir pendaftaran dan lakukan pembayaran</p>
          </div>
        </div>
        
        <!-- Step 3 -->
        <div class="w-full md:w-1/3 px-4 mb-8">
          <div class="bg-white p-6 rounded-lg shadow-md text-center hover:shadow-lg transition">
            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
              <span class="text-blue-600 text-2xl font-bold">3</span>
            </div>
            <h3 class="text-xl font-semibold mb-3">Mulai Belajar</h3>
            <p class="text-gray-600">Dapatkan akses materi dan jadwal kelas Anda</p>
          </div>
        </div>
      </div>
      
      <div class="text-center mt-8">
        <a href="register" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-8 py-3 rounded-full shadow-md hover:shadow-lg transition transform hover:scale-105">
          Daftar Sekarang
        </a>
      </div>
    </div>
  </section>

 <!-- Footer -->
<footer class="bg-gray-900 text-white pt-16 pb-6">
  <div class="max-w-6xl mx-auto px-6">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
      
      <!-- Company Info -->
      <div>
        <a href="tentangkami" class="flex items-center space-x-2 mb-6">
          <span class="text-2xl font-bold text-white">
            <i class="fas fa-language text-blue-400 mr-2"></i>
            KursusBahasa
          </span>
        </a>
        <p class="text-gray-400 mb-6">
          Platform pembelajaran bahasa terdepan di Indonesia dengan metode modern dan pengajar berpengalaman.
        </p>
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
          <li><a href="#tentangkami" class="text-gray-400 hover:text-blue-400 transition">Tentang Kami</a></li>
          <li><a href="#kursus" class="text-gray-400 hover:text-blue-400 transition">Program Kursus</a></li>
          <li><a href="#testimoni" class="text-gray-400 hover:text-blue-400 transition">Testimoni</a></li>
          <li><a href="#faq" class="text-gray-400 hover:text-blue-400 transition">faq</a></li>
        </ul>
      </div>

      <!-- Contact Us -->
      <div>
        <h3 class="text-lg font-semibold mb-6">Hubungi Kami</h3>
        <ul class="space-y-3">
          <li><a href="#" class="text-gray-400 hover:text-blue-400 transition">WhatsApp: 0823-8782-1151</a></li>
          <li><a href="#" class="text-gray-400 hover:text-blue-400 transition">Email: info@kursusbhs.com</a></li>
          <li><a href="#" class="text-gray-400 hover:text-blue-400 transition">Instagram: @kursusbhs</a></li>
          <li><a href="#" class="text-gray-400 hover:text-blue-400 transition">Alamat: Jl. Merdeka No. 88, Jakarta</a></li>
        </ul>
      </div>

    </div>

    <!-- Bottom Footer -->
    <div class="pt-8 border-t border-gray-800 text-center text-gray-400 text-sm">
      <p>&copy; 2025 KursusBahasa. Hak Cipta Dilindungi.</p>
    </div>
  </div>
</footer>

  <!-- JavaScript -->
  <script>
    // Mobile Menu Toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    
    mobileMenuButton.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
    
    // Navbar Scroll Effect
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
      if (window.scrollY > 50) {
        navbar.classList.add('bg-white', 'shadow-lg');
        navbar.classList.remove('bg-opacity-95');
      } else {
        navbar.classList.remove('shadow-lg');
        navbar.classList.add('bg-opacity-95');
      }
    });
    
    // Hero Carousel
    const heroCarousel = document.getElementById('hero-carousel');
    const heroImages = [
      'https://images.unsplash.com/photo-1507842217343-583bb7270b66?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1920&q=80',
      'https://images.unsplash.com/photo-1455390582262-044cdead277a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1920&q=80',
      'https://images.unsplash.com/photo-1519677100203-a0e668c92439?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1920&q=80',

    ];
    
    // Create carousel slides
    heroImages.forEach((img, index) => {
      const slide = document.createElement('div');
      slide.classList.add('carousel-slide');
      if (index === 0) slide.classList.add('active');
      slide.style.backgroundImage = `url(${img})`;
      slide.style.backgroundSize = 'cover';
      slide.style.backgroundPosition = 'center';
      heroCarousel.appendChild(slide);
    });
    
    // Auto rotate hero carousel
    let currentSlide = 0;
    setInterval(() => {
      const slides = document.querySelectorAll('.carousel-slide');
      slides[currentSlide].classList.remove('active');
      currentSlide = (currentSlide + 1) % slides.length;
      slides[currentSlide].classList.add('active');
    }, 5000);
    
    // FAQ Accordion
    const faqToggles = document.querySelectorAll('.faq-toggle');
    faqToggles.forEach(toggle => {
      toggle.addEventListener('click', () => {
        // Close other FAQs
        faqToggles.forEach(other => {
          if (other !== toggle) {
            other.classList.remove('text-blue-600');
            other.nextElementSibling.classList.add('hidden');
            other.querySelector('i').classList.remove('rotate-180');
          }
        });
        
        toggle.classList.toggle('text-blue-600');
        toggle.nextElementSibling.classList.toggle('hidden');
        toggle.querySelector('i').classList.toggle('rotate-180');
      });
    });
    
    // Testimonial Carousel
    const testimonialCarousel = document.getElementById('testimonial-carousel');
    const testimonialSlides = document.querySelectorAll('.testimonial-slide');
    const testimonialDots = document.getElementById('testimonial-dots');
    const prevButton = document.getElementById('testimonial-prev');
    const nextButton = document.getElementById('testimonial-next');
    let activeTestimonial = 0;
    
    // Create dots
    testimonialSlides.forEach((_, index) => {
      const dot = document.createElement('div');
      dot.classList.add('testimonial-dot');
      if (index === 0) dot.classList.add('active');
      dot.addEventListener('click', () => showTestimonial(index));
      testimonialDots.appendChild(dot);
    });
    
    function showTestimonial(index) {
      testimonialCarousel.style.transform = `translateX(-${index * 100}%)`;
      
      // Update dots
      document.querySelectorAll('.testimonial-dot').forEach((dot, i) => {
        if (i === index) {
          dot.classList.add('active');
        } else {
          dot.classList.remove('active');
        }
      });
      
      activeTestimonial = index;
    }
    
    // Button controls
    prevButton.addEventListener('click', () => {
      activeTestimonial = (activeTestimonial - 1 + testimonialSlides.length) % testimonialSlides.length;
      showTestimonial(activeTestimonial);
    });
    
    nextButton.addEventListener('click', () => {
      activeTestimonial = (activeTestimonial + 1) % testimonialSlides.length;
      showTestimonial(activeTestimonial);
    });
    
    // Auto rotate testimonials
    setInterval(() => {
      activeTestimonial = (activeTestimonial + 1) % testimonialSlides.length;
      showTestimonial(activeTestimonial);
    }, 8000);
  </script>
</body>
</html>