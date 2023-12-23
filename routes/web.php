<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KeanggotaanController;

Route::get('/', function () {
    return view('halaman_depan');
});

// Menggunakan Controller dari namespace Auth
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});
Route::get('/keanggotaan', [KeanggotaanController::class, 'index']);
Route::get('/PerguruanTinggi', function () {
    return view('dashboard.perguruanTinggi');
});

