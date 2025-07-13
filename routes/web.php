<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    AuthController,
    ForgotPasswordController,
    ResetPasswordController,
    CourseController,
    PendaftaranController,
    PembayaranController,
    MateriController,
    HistoryController,
    KursusController,
    DashboardAdminController,
    JadwalController,
    TutorMateriController,
    PendaftaranAdminController,
    QuizController,
    QuizPlayController,
    UserManagementController
};


Route::get('/', [HomeController::class, 'landingpage'])->name('home');
Route::get('/landingpage', [HomeController::class, 'landingpage']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginProcess'])->name('login.process');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerSave'])->name('register.save');
Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');

Route::middleware(['auth'])->group(function () {

    // Logout route
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Pelajar routes
    Route::middleware('role:pelajar')->group(function () {
        Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('pelajar.dashboard');
        Route::get('/course-detail', [HomeController::class, 'course-detail']);

        Route::get('/course/{name}', [CourseController::class, 'show']);
        Route::get('/course/{name}/materi', [CourseController::class, 'materi']);

        Route::get('/kursus', [KursusController::class, 'index'])->name('kursus.index');
        Route::get('/kursus/{kodeBahasa}', [KursusController::class, 'show'])->name('kursus.show');

        Route::get('/materi/{kode_bahasa}', [MateriController::class, 'show'])->name('materi');
        Route::get('/materi/{kode_bahasa}/detail', [MateriController::class, 'show'])->name('materi.show');

        Route::get('/pendaftaran', [PendaftaranController::class, 'create'])->name('pendaftaran.create');
        Route::post('/pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');

        Route::get('/pembayaran', [PembayaranController::class, 'create'])->name('pembayaran.create');
        Route::post('/pembayaran', [PembayaranController::class, 'store'])->name('pembayaran.store');
        Route::get('/pembayaran/sukses', [PembayaranController::class, 'success'])->name('pembayaran.success');

        Route::get('/history', [HistoryController::class, 'index'])->name('history');

        Route::get('/quiz/play/{kode_bahasa}', [QuizController::class, 'play'])->name('quiz.play');
        Route::post('/quiz/play', [QuizController::class, 'process'])->name('quiz.process');
        Route::get('/quiz/result', [QuizController::class, 'result'])->name('quiz.result');

        Route::prefix('quiz/play')->name('quiz.play.')->group(function () {
            Route::get('/', [QuizPlayController::class, 'index'])->name('index');
            Route::get('/{id_quiz}', [QuizPlayController::class, 'start'])->name('start');
            Route::post('/{id_quiz}', [QuizPlayController::class, 'submit'])->name('submit');
            Route::get('/result/{id}', [QuizPlayController::class, 'result'])->name('result');
        });
    });

    // Admin routes
    Route::middleware('role:admin')->group(function () {
        
          Route::prefix('admin')->name('admin.')->group(function () {
        // User Management Routes
        Route::get('/users', [UserManagementController::class, 'index'])->name('users.index');
        Route::get('/users/create', [UserManagementController::class, 'create'])->name('users.create');
        Route::post('/users', [UserManagementController::class, 'store'])->name('users.store');
        Route::get('/users/{user}/edit', [UserManagementController::class, 'edit'])->name('users.edit');
        Route::put('/users/{user}', [UserManagementController::class, 'update'])->name('users.update');
        Route::delete('/users/{user}', [UserManagementController::class, 'destroy'])->name('users.destroy');

            // Kursus Routes
            Route::get('/kursus', [KursusController::class, 'adminIndex'])->name('kursus.index');
            Route::get('/kursus/create', [KursusController::class, 'create'])->name('kursus.create');
            Route::post('/kursus', [KursusController::class, 'store'])->name('kursus.store');
            Route::get('/kursus/{id}/edit', [KursusController::class, 'edit'])->name('kursus.edit');
            Route::put('/kursus/{id}', [KursusController::class, 'update'])->name('kursus.update');
            Route::delete('/kursus/{id}', [KursusController::class, 'destroy'])->name('kursus.destroy');

            // Pendaftaran Routes
            Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran.index');
            Route::delete('/pendaftaran/{id}', [PendaftaranController::class, 'destroy'])->name('pendaftaran.destroy');
            Route::put('/pendaftaran/{id}/konfirmasi', [PendaftaranController::class, 'konfirmasi'])->name('pendaftaran.konfirmasi');
        });

        Route::get('/pendaftaranadmin', [PendaftaranAdminController::class, 'index'])->name('admin.pendaftaran.admin');
    });

    // Tutor routes
    Route::middleware('role:tutor')->group(function () {
        Route::get('/tutormateri', [TutorMateriController::class, 'index'])->name('tutor.materi.index');
        Route::resource('tutormateri', TutorMateriController::class);

        Route::get('/jadwal', [JadwalController::class, 'index'])->name('tutor.jadwal.index');
        Route::resource('jadwal', JadwalController::class);

        Route::resource('quiz', QuizController::class);
    });

    // Dashboard admin & tutor
    Route::middleware(['role:admin,tutor'])->group(function () {
        Route::get('/dashboardadmin', [DashboardAdminController::class, 'index'])->name('dashboardadmin');
        Route::get('/admin/dashboard', [DashboardAdminController::class, 'index'])->name('admin.dashboard');
    });

});