<?php

use App\Http\Controllers\Auth\AuthController; // Pastikan ini ada
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\KategoriController;

// Resource Routes
Route::resource('kategoris', KategoriController::class);
Route::resource('informations', InformationController::class);
Route::resource('agendas', AgendaController::class);

// Rute untuk menampilkan form registrasi
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register.view');

// Rute untuk memproses registrasi
Route::post('/register', [AuthController::class, 'register'])->name('register');

// Rute untuk menampilkan form login
Route::get('/login', function () {
    return view('auth.login');
})->name('login.view');

// Rute untuk login dan autentikasi
Route::post('/login', [AuthController::class, 'login'])->name('login');


// Rute untuk halaman dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rute tambahan
Route::get('/galeri', function () {
    return view('galeri');
})->name('galeri');

// Rute untuk halaman depan
Route::get('/', function () {
    return view('welcome');
});

// Grup Rute yang membutuhkan autentikasi
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Grup Rute yang memerlukan middleware admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
    // Tambahkan rute lain yang memerlukan middleware admin di sini
});

