<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Rute untuk menampilkan form login
Route::get('/login', function () {
    return view('auth.login');
})->name('login.view');

// Rute untuk menangani login
Route::post('/login', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Cek kredensial pengguna
    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        // Login berhasil
        return redirect()->route('dashboard');
    }

    // Jika gagal, kembali ke halaman login dengan pesan kesalahan
    return back()->withErrors([
        'email' => 'These credentials do not match our records.',
    ]);
})->name('login');

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
