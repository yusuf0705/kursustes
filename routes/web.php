<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;

use App\Http\Controllers\CourseController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\HistoryController;

// Admin dan tutor
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TutorMateriController;
use App\Http\Controllers\PendaftaranAdminController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuizPlayController;


Route::get('/', [HomeController::class, 'landingpage']);
Route::get('/landingpage', [HomeController::class, 'landingpage']);
Route::get('/home', [HomeController::class, 'home']);
// Routes for authentication
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerSave'])->name('register.save');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess'])->name('login.process');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');

// Dashboard Pengguna

route::get('/dashboard', [HomeController::class, 'dashboard']);
route::get('/course-detail', [HomeController::class, 'course-detail']);
Route::get('/course/{name}', [CourseController::class, 'show']);
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/pendaftaran', [PendaftaranController::class, 'create'])->name('pendaftaran.create');
Route::post('/pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');
Route::get('/pembayaran', [PembayaranController::class, 'create'])->name('pembayaran.create');
Route::post('/pembayaran', [PembayaranController::class, 'store'])->name('pembayaran.store');
Route::get('/pembayaran/sukses', [PembayaranController::class, 'success'])->name('pembayaran.success');


use App\Http\Controllers\KursusController;

Route::middleware(['auth'])->group(function () {
    Route::get('/kursus', [KursusController::class, 'index'])->name('kursus.index');
});

Route::get('/kursus/{kodeBahasa}', [KursusController::class, 'show'])->name('kursus.show');
Route::get('/materi/{kode_bahasa}', [App\Http\Controllers\MateriController::class, 'index'])->name('materi');
// Route::get('/materi/{id}', [KursusController::class, 'materi'])->name('materi');
Route::get('/materi/{kode_bahasa}', [KursusController::class, 'materiByKode'])->name('materi');
Route::get('/materi/{kodeBahasa}', [MateriController::class, 'show'])->name('materi.show');
Route::get('/materi/{kode_bahasa}', [MateriController::class, 'show'])->name('materi');

// routes/web.php

// Route::get('/materi', function () {
//     $kodeBahasa = 'ID';
//     return view('materi', compact('kodeBahasa'));
// });
// Route::get('/materi', function () {
//     return view('materi'); // asumsi file Blade-nya bernama materi.blade.php
// });
// Route::get('/materi', [MateriController::class, 'index']);
Route::get('/history', [HistoryController::class, 'index'])->name('history');
Route::get('/history', function () {
    return view('pengguna.history'); // Menampilkan halaman history secara statis
})->name('history');
Route::get('/course/{name}', [CourseController::class, 'show']);
Route::get('/course/{name}/materi', [CourseController::class, 'materi']);

// route admin dan tutor
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/kursus', [KursusController::class, 'adminIndex'])->name('kursus.index');
    Route::get('/kursus/create', [KursusController::class, 'create'])->name('kursus.create');
    Route::post('/kursus', [KursusController::class, 'store'])->name('kursus.store');
    Route::get('/kursus/{id}/edit', [KursusController::class, 'edit'])->name('kursus.edit');
    Route::put('/kursus/{id}', [KursusController::class, 'update'])->name('kursus.update');
    Route::delete('/kursus/{id}', [KursusController::class, 'destroy'])->name('kursus.destroy');
});


Route::get('/dashboardadmin', [DashboardAdminController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/tutormateri', [TutorMateriController::class, 'index']);
Route::resource('tutormateri', TutormateriController::class);
Route::delete('/admin/pendaftaran/{id}', [PendaftaranController::class, 'destroy'])->name('admin.pendaftaran.destroy');
Route::get('/admin/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran.index');
Route::get('/admin/pendaftaran', [PendaftaranController::class, 'index'])->name('admin.pendaftaran.index');
Route::put('/admin/pendaftaran/{id}/konfirmasi', [PendaftaranController::class, 'konfirmasi'])->name('pendaftaran.konfirmasi');
Route::put('/admin/pendaftaran/konfirmasi/{id}', [PendaftaranController::class, 'konfirmasi'])->name('admin.pendaftaran.konfirmasi');
Route::get('/pendaftaranadmin', [PendaftaranAdminController::class, 'index']);
Route::get('/jadwal', [JadwalController::class, 'index']);
Route::resource('jadwal', JadwalController::class);
Route::resource('quiz', QuizController::class); // Otomatis membuat semua route CRUD

Route::get('/quiz/play/{kode_bahasa}', [QuizController::class, 'play'])->name('quiz.play');
Route::post('/quiz/play', [QuizController::class, 'process'])->name('quiz.process');
Route::get('/quiz/result', [QuizController::class, 'result'])->name('quiz.result');
Route::prefix('quiz/play')->group(function () {
    Route::get('/', [QuizPlayController::class, 'index'])->name('quiz.play.index');
    Route::get('/{id_quiz}', [QuizPlayController::class, 'start'])->name('quiz.play.start');
    Route::post('/{id_quiz}', [QuizPlayController::class, 'submit'])->name('quiz.play.submit');
    Route::get('/quiz/play/{id_quiz}', [QuizController::class, 'play'])->name('quiz.play.start');
    Route::get('/quiz/result/{id}', [QuizPlayController::class, 'result'])->name('quiz.play.result');
    // Halaman untuk mulai quiz (GET)
    Route::get('/quiz/play/{id}', [QuizPlayController::class, 'play'])->name('quiz.play.start');
    // Proses submit jawaban quiz (POST)
    Route::post('/quiz/play/{id}', [QuizPlayController::class, 'submit'])->name('quiz.play.submit');

});

