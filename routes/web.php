<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\MyLoginController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Routing\Route as RoutingRoute;
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

Route::get('/', function () {
    return view('auth.login');
});

// Route::put('/login', [UserController::class, 'masuk']);
// Route::get('/login', [UserController::class, 'masuk']);

Route::get('/selamat-datang', function () {
    return view('paparan-selamat-datang');
});
Route::get('/test', function () {
    return view('test123');
});
Route::get('/lupa-katalaluan', [UserController::class, 'tunjuk_lupa']); 
Route::put('/hantar-lupa-katalaluan', [UserController::class, 'cipta_lupa']); 



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::post('myLogin',[MyLoginController::class,'login']);
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/audit_trail', [LaporanController::class, 'laporan_audit_trail']);
    Route::get('/audit_trail/log_audit', [LaporanController::class, 'log_audit']);
    Route::get('/audit_trail/log_akses', [LaporanController::class, 'log_akses']);
    Route::get('/pelaporan', [LaporanController::class, 'pelaporan']);
    Route::get('/pelaporan/laporan_gagal_log_masuk', [LaporanController::class, 'laporan_gagal_log_masuk']);
    Route::get('/pelaporan/laporan_permohonan_tuntutan_aplikasi', [LaporanController::class, 'laporan_permohonan_tuntutan_aplikasi']);
    Route::get('/pelaporan/laporan_permohonan_wtd', [LaporanController::class, 'laporan_permohonan_wtd']);
    Route::get('/pelaporan/laporan_tempoh_penggunaan_aplikasi', [LaporanController::class, 'laporan_tempoh_penggunaan_aplikasi']);
    Route::get('/pengurusan-pengguna/daftar-pengguna', [LaporanController::class, 'daftar_pengguna']);
    Route::get('/pengurusan-pengguna/senarai-pengguna', [LaporanController::class, 'senarai_pengguna']);
    Route::get('/pengurusan-pengguna/senarai-pengguna/kemaskini/{id}', [LaporanController::class, 'senarai_pengguna_kemaskini']);
    Route::put('/pengurusan-pengguna/senarai-pengguna/simpan-kemaskini/{id}', [LaporanController::class, 'senarai_pengguna_simpan_kemaskini']);
    Route::delete('/pengurusan-pengguna/senarai-pengguna/{id}', [LaporanController::class, 'hapus_senarai_pengguna']); 
    // Route::get('/lupa-katalaluan', [UserController::class, 'cipta_lupa']); 
    // Route::get('/audit_trail', [UserController::class, 'Portal']);




    //Daftar Pengguna
    Route::post('/pengurusan-pengguna/daftar-pengguna', [LaporanController::class, 'daftarPengguna']);
    //Carian
    Route::post('/carian-laporan', [LaporanController::class, 'carianLaporan']);
    Route::post('/carian-log-audit', [LaporanController::class, 'carianLaporanLogAudit']);
    Route::post('/carian-log-akses', [LaporanController::class, 'carianLaporanLogAkses']);
    Route::post('/carian-gagal-log-masuk', [LaporanController::class, 'carianLaporanGagalLogMasuk']);
    Route::post('/carian-semakan-wtd', [LaporanController::class, 'carianLaporanSemakanWTD']);
    Route::post('/carian-permohonan-tuntutan-aplikasi', [LaporanController::class, 'carianLaporanPermohonanTuntutanAplikasi']);
    Route::post('/carian-permohonan-wtd', [LaporanController::class, 'carianLaporanPermohonanWTD']);
    Route::post('/carian-tempoh-penggunaan-aplikasi', [LaporanController::class, 'carianLaporanTempohPenggunaanAplikasi']);
    Route::post('/carian-senarai-pengguna', [LaporanController::class, 'carianSenaraiPengguna']);
    });

require __DIR__.'/auth.php';
