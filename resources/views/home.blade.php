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
  <script src="https://cdn.tailwindcss.com"></script>
    <style>
      .carousel-slide {
        transition: opacity 0.5s ease-in-out;
        position: absolute;
        inset: 0;
        opacity: 0;
        z-index: 0;
      }
      .carousel-slide.opacity-100 {
        opacity: 1;
        z-index: 10;
      }
    </style>
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


<!-- SPACER agar isi tidak ketutup navbar -->
<div class="h-20"></div>
<!-- HERO CAROUSEL -->
<section class="relative w-full h-[500px] overflow-hidden mt-4">
  <div id="hero-carousel" class="w-full h-full relative">
    <!-- Slide 1 -->
    <div class="carousel-slide absolute inset-0 opacity-100 transition-opacity duration-1000 flex items-center justify-center">
      <img src="https://png.pngtree.com/template/20190801/ourlarge/pngtree-yellow-website-welcome-landing-page-image_286431.jpg" alt="Slide 1" class="w-full h-full object-cover">
    </div>
    <!-- Slide 2 -->
    <div class="carousel-slide absolute inset-0 opacity-0 transition-opacity duration-1000 flex items-center justify-center">
      <img src="{{ asset('img/awal.png') }}" alt="Slide 2" class="w-full h-full object-cover">
    </div>
    <!-- Slide 3 -->
    <div class="carousel-slide absolute inset-0 opacity-0 transition-opacity duration-1000 flex items-center justify-center">
      <img src="https://source.unsplash.com/1600x400/?students,learning" alt="Slide 3" class="w-full h-full object-cover">
    </div>
  </div>
</section>

<script>
  const heroSlides = document.querySelectorAll('#hero-carousel .carousel-slide');
  let currentHero = 0;

  setInterval(() => {
    heroSlides[currentHero].classList.remove('opacity-100');
    heroSlides[currentHero].classList.add('opacity-0');

    currentHero = (currentHero + 1) % heroSlides.length;

    heroSlides[currentHero].classList.remove('opacity-0');
    heroSlides[currentHero].classList.add('opacity-100');
  }, 3000);
</script>


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
          <p class="text-gray-600">Kurikulum modern dan sistematis,materi disusun.</p>
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
 <!-- SECTION: Testimoni -->
<section id="testimoni" class="bg-gray-50 py-12">
  <div class="max-w-6xl mx-auto text-center px-4">
    <h2 class="text-2xl font-semibold">Apa Kata Mereka?</h2>
    <p class="text-gray-600 mt-4 mb-8">Lihat pengalaman beberapa siswa yang telah belajar bersama kami.</p>

    <!-- Carousel Container -->
    <div class="relative w-full overflow-hidden">
      <div id="testimonial-carousel-wrapper" class="flex transition-transform duration-700 ease-in-out">

        <!-- Slide 1: 3 testimonial -->
        <div class="w-full flex justify-center gap-6 px-4 shrink-0">
          <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-xs">
            <p class="text-sm text-gray-600 mb-4">"Kursus bahasa Jepang sangat membantu saya, Berkat ini saya bisa mendapatkan pekerjaan dijepang"</p>
            <span class="block font-semibold text-blue-600">Sarah W.</span>
            <span class="text-sm text-gray-500">Bahasa Jepang</span>
          </div>
          <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-xs">
            <p class="text-sm text-gray-600 mb-4">"Saya lebih percaya diri berbahasa Inggris."</p>
            <span class="block font-semibold text-blue-600">Joko S.</span>
            <span class="text-sm text-gray-500">Bahasa Inggris</span>
          </div>
          <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-xs">
            <p class="text-sm text-gray-600 mb-4">"Bahasa Mandarin membuka peluang kerja saya."</p>
            <span class="block font-semibold text-blue-600">Rina T.</span>
            <span class="text-sm text-gray-500">Bahasa Mandarin</span>
          </div>
        </div>

        <!-- Slide 2: 3 testimonial -->
        <div class="w-full flex justify-center gap-6 px-4 shrink-0">
          <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-xs">
            <p class="text-sm text-gray-600 mb-4">"Bahasa Inggris di sini membantu karir saya."</p>
            <span class="block font-semibold text-blue-600">Andi P.</span>
            <span class="text-sm text-gray-500">Bahasa Inggris</span>
          </div>
          <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-xs">
            <p class="text-sm text-gray-600 mb-4">"Belajar bahasa Spanyol sangat menyenangkan!"</p>
            <span class="block font-semibold text-blue-600">Carlos M.</span>
            <span class="text-sm text-gray-500">Bahasa Spanyol</span>
          </div>
          <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-xs">
            <p class="text-sm text-gray-600 mb-4">"Belajar bahasa German sangat menyenangkan disini."</p>
            <span class="block font-semibold text-blue-600">Lina F.</span>
            <span class="text-sm text-gray-500">Bahasa German</span>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<script>
  const testimonialWrapper = document.getElementById('testimonial-carousel-wrapper');
  let testimonialIndex = 0;
  const totalTestimonialSlides = 2; // Jumlah grup slide (2 grup: setiap grup berisi 3 testimonial)

  function updateTestimonialCarousel() {
    const slideWidth = testimonialWrapper.children[0].offsetWidth; // Mengambil lebar slide (1 grup)
    testimonialWrapper.style.transform = `translateX(-${testimonialIndex * slideWidth}px)`; // Menggeser sesuai lebar grup
  }

  setInterval(() => {
    testimonialIndex = (testimonialIndex + 1) % totalTestimonialSlides;
    updateTestimonialCarousel();
  }, 3000); // Setiap 3 detik
</script>
   <!-- Header -->
   <header class="bg-blue-600 py-12 text-center text-white">
    <h1 class="text-4xl font-bold animate__animated animate__fadeIn">How to Join Kursus Bahasa</h1>
  </header>

  
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
            <p class="text-gray-600 relative z-10">Buat akun di platform kami. Isi formulir pendaftaran  Anda untuk memulai.</p>
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
            <p class="text-gray-600 relative z-10">Pilih bahasa dan level yang sesuai dengan kebutuhan Anda. </p>
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
            <p class="text-gray-600 relative z-10">Akses materi pembelajaran, kerjakan quiz, dan mulai perjalanan bahasa baru Anda!</p>
          </div>
        </div>
        
        <!-- CTA Button -->
        <div class="text-center mt-12">
          <a href="register" class="inline-block px-10 py-4 bg-blue-600 text-white font-bold rounded-xl shadow-lg hover:bg-blue-700 hover:shadow-xl transition transform hover:scale-105">
            Mulai Sekarang
            <i class="fas fa-arrow-right ml-2"></i>
          </a>
        </div>
      </div>
    </section>
<!-- SECTION: FAQ -->
<section id="faq" class="bg-white py-12">
  <div class="max-w-4xl mx-auto px-4">
    <h2 class="text-2xl font-semibold text-center mb-8">Pertanyaan yang Sering Diajukan</h2>

    <div class="space-y-4">

      <!-- FAQ 1 -->
      <div class="border rounded-lg overflow-hidden">
        <button class="w-full text-left px-6 py-4 font-medium bg-gray-100 hover:bg-gray-200 flex justify-between items-center faq-toggle">
          Apakah tersedia kelas online?
          <svg class="w-5 h-5 transition-transform transform faq-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div class="faq-content px-6 py-4 hidden text-gray-700">
          Ya, kami menyediakan kelas online tersedia tergantung dari metode pembelajaran yang akan dipakai oleh tutor.
      </div>

      <!-- FAQ 2 -->
      <div class="border rounded-lg overflow-hidden">
        <button class="w-full text-left px-6 py-4 font-medium bg-gray-100 hover:bg-gray-200 flex justify-between items-center faq-toggle">
          Apakah akan mendapatkan sertifikat?
          <svg class="w-5 h-5 transition-transform transform faq-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div class="faq-content px-6 py-4 hidden text-gray-700">
          Tentu! Sertifikat diberikan setelah menyelesaikan kursus dan mengikuti evaluasi akhir.
        </div>
      </div>

      <!-- FAQ 3 -->
      <div class="border rounded-lg overflow-hidden">
        <button class="w-full text-left px-6 py-4 font-medium bg-gray-100 hover:bg-gray-200 flex justify-between items-center faq-toggle">
          Bagaimana cara pembayaran?
          <svg class="w-5 h-5 transition-transform transform faq-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div class="faq-content px-6 py-4 hidden text-gray-700">
          Pembayaran bisa dilakukan melalui transfer bank, e-wallet (OVO, DANA), atau langsung ke tempat kursus.
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Script Dropdown FAQ -->
<script>
  const toggles = document.querySelectorAll('.faq-toggle');

  toggles.forEach(toggle => {
    toggle.addEventListener('click', () => {
      const content = toggle.nextElementSibling;
      const icon = toggle.querySelector('.faq-icon');

      content.classList.toggle('hidden');
      icon.classList.toggle('rotate-180');
    });
  });
</script>
<!-- Footer -->
<footer class="bg-gray-900 text-white pt-16 pb-6">
  <div class="max-w-6xl mx-auto px-6">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
      
      <!-- Company Info -->
      <div>
        <a href="#" class="flex items-center space-x-2 mb-6">
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
          <li><a href="#" class="text-gray-400 hover:text-blue-400 transition">Tentang Kami</a></li>
          <li><a href="#" class="text-gray-400 hover:text-blue-400 transition">Program Kursus</a></li>
          <li><a href="#" class="text-gray-400 hover:text-blue-400 transition">Jadwal Kelas</a></li>
          <li><a href="#" class="text-gray-400 hover:text-blue-400 transition">Testimoni</a></li>
          <li><a href="#" class="text-gray-400 hover:text-blue-400 transition">Blog</a></li>
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


  </body>
</html>
