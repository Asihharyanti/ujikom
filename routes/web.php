<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InformationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/galeri', function () {
    return view('galeri');
})->name('galeri');


Route::get('/agenda', function () {
    return view('agenda');
})->name('agenda');

Route::resource('informations', InformationController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// Rute untuk halaman depan
Route::get('/', function () {
    return view('welcome');
});

// Rute untuk login dan registrasi
require __DIR__.'/auth.php';

// Rute untuk dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rute yang membutuhkan autentikasi
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
    // Rute lainnya yang memerlukan middleware admin

Route::middleware(['auth', 'admin'])->group(function () {   
    Route::get('/informasi/{id}', [InformasiController::class, 'edit'])->name('edit');
   
});   
});



