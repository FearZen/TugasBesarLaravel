<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KeanggotaanController;
use App\Http\Controllers\PerguruanTinggiController;
use App\Http\Controllers\dashController; // Gantilah dashController dengan nama controller yang sesuai
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
// web.php atau routes file lainnya
Route::get('/PerguruanTinggi', [PerguruanTinggiController::class, 'index'])->name('perguruan-tinggi.index');
Route::post('/submit-form', [FormController::class, 'submitForm'])->name('submit_form');
Route::get('/perwakilan', [dashController::class, 'perwakilan'])->name('perwakilan');
Route::get('/pertemuan-ilmiah', [dashController::class, 'pertemuanIlmiah'])->name('pertemuan_ilmiah');
Route::get('/penghargaan-tanda-jasa', [dashController::class, 'penghargaanTandaJasa'])->name('penghargaan_tanda_jasa');
Route::get('/buku-pelajaran', [dashController::class, 'bukuPelajaran'])->name('buku_pelajaran');
Route::get('/olahraga-humainora', [dashController::class, 'olahragaHumainora'])->name('olahraga_humainora');
Route::get('/tim-penilaian', [dashController::class, 'timPenilaian'])->name('tim_penilaian');
Route::get('/biodata', [dashController::class, 'biodata'])->name('biodata');
Route::get('/data-saya', [dashController::class, 'dataSaya'])->name('data_saya');

