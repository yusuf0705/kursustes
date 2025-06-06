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
Route::post('/pembayaran', [PembayaranController::class, 'success'])->name('pembayaran.success');

Route::get('/materi/{kodeBahasa}', [MateriController::class, 'show'])->name('materi.show');
Route::get('/materi', function () {
    $kodeBahasa = 'ID';
    return view('materi', compact('kodeBahasa'));
});
Route::get('/materi', function () {
    return view('materi'); // asumsi file Blade-nya bernama materi.blade.php
});
Route::get('/materi', [MateriController::class, 'index']);
Route::get('/history', [HistoryController::class, 'index'])->name('history');
Route::get('/history', function () {
    return view('pengguna.history'); // Menampilkan halaman history secara statis
})->name('history');
Route::get('/course/{name}', [CourseController::class, 'show']);
Route::get('/course/{name}/materi', [CourseController::class, 'materi']);


// route admin dan tutor
Route::get('/dashboardadmin', [DashboardAdminController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/tutormateri', [TutorMateriController::class, 'index']);
Route::get('/pendaftaranadmin', [PendaftaranAdminController::class, 'index']);
Route::get('/jadwal', [JadwalController::class, 'index']);
Route::resource('quiz', QuizController::class); // Otomatis membuat semua route CRUD

