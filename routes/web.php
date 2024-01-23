<?php
use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\dashController; 
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PerwakilanController;
use App\Http\Controllers\KeanggotaanController;
<<<<<<< HEAD
use App\Http\Controllers\PenghargaanController;
use App\Http\Controllers\PerguruanTinggiController;
use App\Http\Controllers\PertemuanIlmiahController;
use App\Http\Controllers\SportsController;
use App\Http\Controllers\TimPenilaianController;
use App\Http\Controllers\BiodataController;
use App\Models\Biodata;

=======
use App\Http\Controllers\PerguruanTinggiController;
use App\Http\Controllers\dashController; 
use App\Http\Controllers\DashboardController;
>>>>>>> 528c133d59d60c5091aa05d1a319cc5f3336e52f
Route::get('/', function () {
    return view('halaman_depan');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
<<<<<<< HEAD
Route::get('/dashboard', function () {
    $userId = Auth::user()->id;

    $biodata = DB::table('biodatas')->where('user_id', $userId)->first();
    $user = DB::table('users')->where('id', $userId)->first();
    return view('dashboard.dashboard', [
        'userData' => $biodata,
        'user' => $user
    ]);
=======
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/keanggotaan', [KeanggotaanController::class, 'index']);
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
Route::get('/submit', function () {
    return view('dashboard.submit');
>>>>>>> 528c133d59d60c5091aa05d1a319cc5f3336e52f
});

Route::get('/keanggotaan', [KeanggotaanController::class, 'index']);
// web.php atau routes file lainnya
Route::get('/PerguruanTinggi', [PerguruanTinggiController::class, 'index'])->name('perguruan-tinggi.index');
Route::post('/submit-form', [FormController::class, 'submitForm'])->name('submit_form');

// submit pertemuan ilmiah
Route::post('/submit-pertemuan-ilmiah', [PertemuanIlmiahController::class, 'submitPertemuanIlmiah'])->name('submit_pertemuan_ilmiah');
Route::get('/pertemuan-ilmiah', [dashController::class, 'pertemuanIlmiah'])->name('pertemuan_ilmiah');

// submit perwakilan
Route::post('/submit-perwakilan', [PerwakilanController::class, 'submitPerwakilan'])->name('submit_perwakilan');
Route::get('/perwakilan', [dashController::class, 'perwakilan'])->name('perwakilan');

// submit penghargaan
Route::post('/submit-penghargaan', [PenghargaanController::class, 'submitPenghargaan'])->name('submit_penghargaan');
Route::get('/penghargaan-tanda-jasa', [dashController::class, 'penghargaanTandaJasa'])->name('penghargaan_tanda_jasa');

// submit buku
Route::post('/submit-buku', [BukuController::class, 'submitBuku'])->name('submit_buku');
Route::get('/buku-pelajaran', [dashController::class, 'bukuPelajaran'])->name('buku_pelajaran');

// submit olahraga
Route::post('/submit-sport', [SportsController::class, 'submitSport'])->name('submit_sport');

// submit tim penilaian
Route::post('/submit-tim-penilaian', [TimPenilaianController::class, 'submitTimPenilaian'])->name('submit_tim_penilaian');

Route::get('/olahraga-humainora', [dashController::class, 'olahragaHumainora'])->name('olahraga_humainora');
Route::get('/tim-penilaian', [dashController::class, 'timPenilaian'])->name('tim_penilaian');
Route::get('/biodata', [dashController::class, 'biodata'])->name('biodata');
Route::get('/submit', function () {
    return view('dashboard.submit');
});

// view biodata
Route::get('/biodata', [dashController::class, 'biodata'])->name('biodata');
Route::post('/submit-biodata', [BiodataController::class, 'submitBiodata'])->name('submit_biodata');

// view data saya
Route::get('/data-saya', [dashController::class, 'dataSaya'])->name('data_saya');