<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pendaftaran;
use App\Models\Kursus;
use App\Models\Pelajar;
use App\Models\Tutor; 

class KursusController extends Controller
{
    /**
     * Get flag image URL based on language code
     */
    private function getFlagImages()
    {
        return [
            'english' => 'https://tse2.mm.bing.net/th?id=OIP.HaU0bQXXm9v2gipkfm5vVwHaEV&pid=Api&P=0&h=220',
            'jepang' => 'https://www.situsbelanjaonline.com/china/images/arti%20kata%20dan%20bendera%20jepang.jpg',
            'mandarin' => 'https://img.okezone.com/content/2016/11/28/337/1553402/pengibaran-bendera-china-ancam-kedaulatan-nkri-BviKp6TwD4.jpg',
            'korea' => 'https://wallpaperaccess.com/full/22460.jpg',
            'spanyol' => 'https://tse2.mm.bing.net/th?id=OIP.eY9kN9s58DMc-SW3H5S3KwHaEK&pid=Api&P=0&h=220',
            'jerman' => 'https://cdn.pixabay.com/photo/2015/11/24/16/23/flag-germany-1060305_1280.jpg',
        ];
    }

    /**
     * Add flag image to course data
     */
    private function addFlagToKursus($kursusDiambil)
    {
        $flagImages = $this->getFlagImages();
        
        return $kursusDiambil->map(function ($kursus) use ($flagImages) {
            $kodeBahasa = strtolower($kursus->kode_bahasa);
            $kursus->flag_image = $flagImages[$kodeBahasa] ?? null;
            return $kursus;
        });
    }

    public function index()
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
        }

        // Cari pelajar berdasarkan user_id
        $pelajar = Pelajar::where('user_id', $user->id)->first();

        if (!$pelajar) {
            // Cek apakah user sudah pernah mendaftar tapi belum jadi pelajar
            $pendaftaranPending = Pendaftaran::whereHas('pelajar', function($query) use ($user) {
                $query->where('user_id', $user->id);
            })->where('status', '!=', 'disetujui')->first();

            if ($pendaftaranPending) {
                return redirect()->route('dashboard')->with('info', 'Pendaftaran Anda masih dalam proses. Silakan tunggu konfirmasi admin.');
            }

            return redirect()->route('pendaftaran.create')->with('error', 'Silakan daftar terlebih dahulu untuk mengakses kursus.');
        }

        // Ambil semua pendaftaran yang disetujui untuk pelajar ini
        $pendaftaranDisetujui = Pendaftaran::where('id_pelajar', $pelajar->id_pelajar)
            ->where('status', 'disetujui')
            ->get();

        // Jika tidak ada pendaftaran yang disetujui
        if ($pendaftaranDisetujui->isEmpty()) {
            $kursusDiambil = collect();
            return view('pengguna.kursus', compact('kursusDiambil'));
        }

        // Ambil kursus berdasarkan pendaftaran yang disetujui
        $kursusIds = $pendaftaranDisetujui->pluck('id_kursus');
        $kursusDiambil = Kursus::whereIn('id_kursus', $kursusIds)->get();

        // Tambahkan flag image ke setiap kursus
        $kursusDiambil = $this->addFlagToKursus($kursusDiambil);

        return view('pengguna.kursus', compact('kursusDiambil'));
    }

    public function materiByKode($kode_bahasa) 
    {
        $kursus = Kursus::where('kode_bahasa', $kode_bahasa)->with('jadwal')->firstOrFail();
        
        // Tambahkan flag image ke kursus
        $flagImages = $this->getFlagImages();
        $kodeBahasa = strtolower($kursus->kode_bahasa);
        $kursus->flag_image = $flagImages[$kodeBahasa] ?? null;
        
        return view('pengguna.materi', compact('kursus'));
    }

    /**
     * Get all available courses with flags (untuk admin atau listing semua kursus)
     */
    public function getAllCourses()
    {
        $allKursus = Kursus::all();
        $allKursus = $this->addFlagToKursus($allKursus);
        
        return view('pengguna.all-courses', compact('allKursus'));
    }

    public function adminIndex()
{
    $kursusList = Kursus::with('tutor')->get(); // Jika kamu ingin tampilkan tutor
    return view('admin_tutor.kursus_crud.index', compact('kursusList'));
}


    public function create()
{
    $tutors = Tutor::with('user')->get(); // Pastikan relasi 'user' sudah ada di model Tutor
    return view('admin_tutor.kursus_crud.create', compact('tutors'));
}


// Menyimpan data kursus baru
public function store(Request $request)
{
    $validated = $request->validate([
        'id_tutor' => 'required|exists:tutor,id_tutor',
        'kode_bahasa' => 'required|in:English,Jepang,Mandarin,Korea,Spanyol,Jerman|unique:kursus,kode_bahasa',
    ]);

    Kursus::create($validated);

    return redirect()->route('admin.kursus.index')->with('success', 'Kursus berhasil ditambahkan.');
}

// Menampilkan form edit kursus
public function edit($id)
{
    $kursus = Kursus::findOrFail($id);
    return view('admin_tutor.kursus_crud.edit', compact('kursus'));
}

public function destroy($id)
{
    $kursus = Kursus::findOrFail($id);
    $kursus->delete();

    return redirect()->route('admin.kursus.index')->with('success', 'Kursus berhasil dihapus.');
}

// Menyimpan perubahan pada kursus
public function update(Request $request, $id)
{
    $kursus = Kursus::findOrFail($id);

    $validated = $request->validate([
        'id_tutor' => 'required|exists:tutor,id_tutor',
        'kode_bahasa' => 'required|in:English,Jepang,Mandarin,Korea,Spanyol,Jerman|unique:kursus,kode_bahasa,' . $kursus->id_kursus . ',id_kursus',
    ]);

    $kursus->update($validated);

    return redirect()->route('admin.kursus.index')->with('success', 'Kursus berhasil diperbarui.');
}

    /**
     * Get course detail with flag
     */
    public function show($id)
    {
        $kursus = Kursus::findOrFail($id);
        
        // Tambahkan flag image
        $flagImages = $this->getFlagImages();
        $kodeBahasa = strtolower($kursus->kode_bahasa);
        $kursus->flag_image = $flagImages[$kodeBahasa] ?? null;
        
        return view('pengguna.course-detail', compact('kursus'));
    }

    /**
     * API method untuk mendapatkan flag berdasarkan kode bahasa
     */
    public function getFlagByLanguage($kodeBahasa)
    {
        $flagImages = $this->getFlagImages();
        $kodeBahasa = strtolower($kodeBahasa);
        
        return response()->json([
            'kode_bahasa' => $kodeBahasa,
            'flag_image' => $flagImages[$kodeBahasa] ?? null,
            'has_flag' => isset($flagImages[$kodeBahasa])
        ]);
    }
}