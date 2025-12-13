<?php

use Illuminate\Support\Facades\Route;

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

// Admin Routes
Route::get('/admin/dashboard', [\App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/laporan/{id}', [\App\Http\Controllers\AdminController::class, 'show'])->name('admin.show');
Route::delete('/admin/laporan/{id}', [\App\Http\Controllers\AdminController::class, 'destroy'])->name('admin.destroy');
use App\Http\Controllers\LaporanController;

