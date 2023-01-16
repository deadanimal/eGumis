<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('auth.login');
// });

Route::put('/login', [UserController::class, 'masuk']);
// Route::get('/login', [UserController::class, 'masuk']);

Route::get('/selamat-datang', function () {
    return view('paparan-selamat-datang');
});

// Route::get('/laporan_audit_trail', function () {
//     return view('audit_trail.laporan_audit_trail');
// });
Route::get('/audit_trail', [LaporanController::class, 'laporan_audit_trail']);
// Route::get('/laporan_audit_trail', [LaporanController::class, 'laporan_audit_trail']);
Route::get('/audit_trail/log_audit', [LaporanController::class, 'log_audit']);
Route::get('/audit_trail/log_akses', [LaporanController::class, 'log_akses']);
Route::get('/pelaporan', [LaporanController::class, 'pelaporan']);
// Route::get('/pelaporan/laporan_semakan_wtd', [LaporanController::class, 'laporan_semakan_wtd']);
Route::get('/pelaporan/laporan_gagal_log_masuk', [LaporanController::class, 'laporan_gagal_log_masuk']);
// Route::get('/search', 'LaporanController@search');
Route::post('/carian-laporan', [LaporanController::class, 'carianLaporan']);
Route::get('/search', [LaporanController::class, 'search']);

Route::get('/pelaporan/laporan_permohonan_tuntutan_aplikasi', [LaporanController::class, 'laporan_permohonan_tuntutan_aplikasi']);
Route::get('/pelaporan/laporan_permohonan_wtd', [LaporanController::class, 'laporan_permohonan_wtd']);
Route::get('/pelaporan/laporan_tempoh_penggunaan_aplikasi', [LaporanController::class, 'laporan_tempoh_penggunaan_aplikasi']);
Route::get('/peranan', [LaporanController::class, 'peranan']);





// Route::get('/log_audit', function () {
//     return view('audit_trail.log_audit');
// });

// Route::get('/log_akses', function () {
//     return view('audit_trail.log_akses');
// });

// Route::get('/laporan_semakan_wtd', function () {
//     return view('pelaporan.laporan_semakan_wtd');
// });

// Route::get('/laporan_gagal_log_masuk', function () {
//     return view('pelaporan.laporan_gagal_log_masuk');
// });

// Route::get('/laporan_permohonan_tuntutan_aplikasi', function () {
//     return view('pelaporan.laporan_permohonan_tuntutan_aplikasi');
// });

// Route::get('/laporan_permohonan_wtd', function () {
//     return view('pelaporan.laporan_permohonan_wtd');
// });

// Route::get('/laporan_tempoh_penggunaan_aplikasi', function () {
//     return view('pelaporan.laporan_tempoh_penggunaan_aplikasi');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
