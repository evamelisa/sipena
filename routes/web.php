<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController; // ⬅ tambah ini
use App\Http\Controllers\LaporanController;

Route::get('/beranda', function () {
    return view('Beranda');
});

Route::get('/profil', function () {
    return view('Profil');
});

Route::get('/layanan', function () {
    return view('Layanan');
});

Route::get('/samsat-corner', function() {
    return view('samsat.corner');
})->name('samsat.corner');

Route::get('/informasi', function () {
    return view('Informasi');
})->name('informasi');

Route::get('/faq', function () {
    return view('Faq');
})->name('faq');

Route::get('/laporan', function () {
    return view('laporan');
})->name('laporan');

// Terima submission laporan (POST)
Route::post('/laporan', [\App\Http\Controllers\LaporanController::class, 'store']);

Route::get('/layanan/kantor-samsat', function(){ 
    return view('kantor-samsat'); 
})->name('layanan.kantor-samsat');

Route::get('/layanan/samsat-corner', function(){ 
    return view('samsat-corner'); 
})->name('layanan.samsat-corner');
Route::get('/layanan/samsat-bergerak', function(){ 
    return view('samsat-bergerak'); 
})->name('layanan.samsat-bergerak');

Route::get('/layanan/samsat-keliling', function(){ 
    return view('samsat-keliling'); 
})->name('layanan.samsat-keliling');

Route::get('/layanan/pelantar-emas', function(){ 
    return view('pelantar-emas'); 
})->name('layanan.pelantar-emas');
Route::get('/layanan/jadwal-samsat', function(){ 
    return view('jadwal-samsat'); 
})->name('layanan.jadwal-samsat');

Route::get('/lainnya/tanya-kami', function(){ 
    return view('tanya-kami'); 
})->name('lainnya.tanya-kami');

Route::get('/admin/login', [AuthController::class, 'loginPage'])->name('login');
Route::post('/admin/login', [AuthController::class, 'login']);

Route::get('/admin/register', [AuthController::class, 'registerPage']);
Route::post('admin/register', [AuthController::class, 'register']);

Route::get('/logout', [AuthController::class, 'logout']);

// Admin Routes

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/laporan/{laporan}', [AdminController::class, 'show'])->name('admin.show');
    Route::delete('/laporan/{laporan}', [AdminController::class, 'destroy'])->name('admin.destroy');
});

//route untuk link pindah halaman layanan
Route::view('/samsat-keliling', 'samsat-keliling');
Route::view('/samsat-corner', 'samsat-corner');
Route::view('/samsat-bergerak', 'samsat-bergerak');
Route::view('/kantor-samsat', 'kantor-samsat');
Route::view('/pelantar-emas', 'pelantar-emas');
Route::view('/jadwal-samsat', 'jadwal-samsat');
