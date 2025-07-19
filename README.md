Aplikasi Jasa Bimbel Kursus Bahasa Asing

Deskripsi Proyek:
Aplikasi ini bertujuan untuk menyediakan layanan bimbingan belajar (bimbel) khusus kursus bahasa asing dengan sistem manajemen berbasis online. Meskipun kegiatan pembelajaran berlangsung secara offline di lokasi fisik, platform ini dirancang untuk memudahkan proses administrasi seperti pendaftaran, pemilihan program bahasa, dan pembayaran yang dapat dilakukan secara digital. Hal ini membuat prosesnya lebih praktis dan efisien.

Selain itu, aplikasi dikembangkan dengan fokus pada kenyamanan pengguna melalui tampilan antarmuka yang sederhana dan aksesibilitas yang tinggi di berbagai perangkat. Dengan adanya platform ini, pengguna dapat mengakses layanan kursus bahasa asing dengan lebih mudah tanpa harus datang langsung hanya untuk keperluan administrasi.

Kelompok 5 - IF 2D Malam:
👤 Joel Fransisco Sinurat (3312411116) - Ketua
👤 Muhammad Yusuf Syafrianis (3312411094)
👤 Ardhitya Danur Siswondo (3312411099)
👤 Samuel Siregar (3312411115)

📧 Email Ketua: Joelsinurat14@gmail.com

## 📚 Dokumentasi

### 📄 Laporan Akhir (PBL)
[📘 Download Laporan Akhir PBL (PDF)](https://github.com/Gray1283/Jasabimbingankursusbahasaasing/raw/main/Dokumentasi/LaporanPBLKelompok5AplikasiJasaBimbelKursusBahasaAsing.pdf)

### 🎥 Video Presentasi
[🎬 Tonton Video Presentasi](https://youtu.be/s0ZRCXyb614)

### 📹 Video Demo Aplikasi  
[📱 Tonton Demo Aplikasi](https://youtu.be/XuuKs1fdpLo)

### 📖 Manual Book
- [📙 Manual Book Aplikasi (PDF)](https://github.com/Gray1283/Jasabimbingankursusbahasaasing/raw/main/Dokumentasi/Manual%20Book.pdf)

## 🚀 Cara Instalasi & Menjalankan Aplikasi

### Prerequisites
- PHP >= 8.1
- Composer
- Node.js & npm
- MySQL/PostgreSQL

### Langkah Instalasi
```bash
# 1. Clone repository
git clone [link-repo-ini]
cd [nama-folder]

# 2. Install dependencies
composer install
npm install

# 3. Setup environment
cp .env.example .env
php artisan key:generate

# 4. Setup database
php artisan migrate
php artisan db:seed

# 5. Build Tailwind CSS assets
npm run build

# 6. Jalankan aplikasi
php artisan serve

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
