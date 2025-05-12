<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriController extends Controller
{
    // Menyimpan URL bendera untuk setiap bahasa
    private array $flagUrls = [
        'english' => 'https://tse2.mm.bing.net/th?id=OIP.HaU0bQXXm9v2gipkfm5vVwHaEV&pid=Api&P=0&h=220', // URL bendera Inggris
        'mandarin' => 'https://img.okezone.com/content/2016/11/28/337/1553402/pengibaran-bendera-china-ancam-kedaulatan-nkri-BviKp6TwD4.jpg', // Placeholder URL untuk bendera Jepang
        'jepang' => 'https://www.situsbelanjaonline.com/china/images/arti%20kata%20dan%20bendera%20jepang.jpg', // Placeholder URL untuk bendera Mandarin
        'korea' => 'https://wallpaperaccess.com/full/22460.jpg', // Placeholder URL untuk bendera Korea
        'spanyol' => 'https://tse2.mm.bing.net/th?id=OIP.eY9kN9s58DMc-SW3H5S3KwHaEK&pid=Api&P=0&h=220', // Placeholder URL untuk bendera Prancis
        'jerman' => 'https://cdn.pixabay.com/photo/2015/11/24/16/23/flag-germany-1060305_1280.jpg', // Placeholder URL untuk bendera Jerman
        'default' => 'https://tse2.mm.bing.net/th?id=OIP.meoKXhQHUyMqZpIN8zt9fQHaEK&pid=Api&P=0&h=220', // Default flag
    ];
    
    // Menampilkan daftar bahasa (halaman utama materi)
    public function index()
    {
        return view('pengguna.materi', [
            'kodeBahasa' => null,
            'materi' => [], // atau null juga boleh
            'flagUrl' => $this->flagUrls['default'],
        ]);
    }
    
    // Menampilkan materi berdasarkan kode bahasa
    public function show($kodeBahasa) 
    {
        $kodeBahasa = strtolower($kodeBahasa);
        $upperKodeBahasa = strtoupper($kodeBahasa);
        
        // Mendapatkan URL bendera dari array flagUrls
        $flagUrl = $this->flagUrls[$kodeBahasa] ?? $this->flagUrls['default'];
        
        $materi = match ($upperKodeBahasa) {
            'ENGLISH' => [
                ['judul' => 'Materi 1', 'deskripsi' => 'Intro to English'],
                ['judul' => 'Materi 2', 'deskripsi' => 'Vocabulary'],
                ['judul' => 'Materi 3', 'deskripsi' => 'Grammar'],
                ['judul' => 'Quiz materi 1', 'deskripsi' => 'Quiz'],
            ],
            'MANDARIN' => [
                ['judul' => 'Materi 1', 'deskripsi' => 'Einführung in Mandarin'],
                ['judul' => 'Materi 2', 'deskripsi' => 'Wortschatz'],
                ['judul' => 'Materi 3', 'deskripsi' => 'Grammatik'],
                ['judul' => 'Quiz materi 1', 'deskripsi' => 'Quiz'],
            ],
            'JEPANG' => [
                ['judul' => 'Bahasa Jepang Dasar', 'deskripsi' => 'Pengenalan huruf Hiragana dan Katakana'],
                ['judul' => 'Percakapan Sehari-hari', 'deskripsi' => 'Belajar kalimat dasar untuk percakapan'],
                ['judul' => 'Tata Bahasa Dasar', 'deskripsi' => 'Struktur kalimat dalam Bahasa Jepang'],
            ],
            'KOREA' => [
                ['judul' => 'Bahasa Korea Dasar', 'deskripsi' => 'Pengenalan Hangeul dan pengucapan'],
                ['judul' => 'Bahasa Korea Lanjutan', 'deskripsi' => 'Percakapan dan tata bahasa tingkat lanjut'],
                ['judul' => 'Korean Pop Culture', 'deskripsi' => 'Belajar melalui K-pop dan K-drama'],
            ],
            'SPANYOL' => [
                ['judul' => 'Introduction à Français', 'deskripsi' => 'Dasar-dasar bahasa Spanyol'],
                ['judul' => 'Vocabulaire', 'deskripsi' => 'Kosakata sehari-hari'],
                ['judul' => 'Grammaire', 'deskripsi' => 'Tata bahasa Spanyol'],
            ],
            'JERMAN' => [
                ['judul' => 'Deutsch für Anfänger', 'deskripsi' => 'Bahasa Jerman untuk pemula'],
                ['judul' => 'Deutsche Grammatik', 'deskripsi' => 'Tata bahasa Jerman'],
                ['judul' => 'Konversation', 'deskripsi' => 'Percakapan sehari-hari'],
            ],
            default => [],
        };
        
        return view('pengguna.materi', [
            'materi' => $materi, 
            'kodeBahasa' => $kodeBahasa,
            'flagUrl' => $flagUrl,
        ]);
    }
}
