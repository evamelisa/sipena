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

Route::get('/lainnya', function () {
    return view('Lainnya');
});

Route::get('/samsat-corner', function() {
    return view('samsat.corner');
})->name('samsat.corner');

Route::get('/informasi', function () {
    return view('Informasi');
})->name('informasi');

Route::get('/laporan', function () {
    return view('Laporan');
})->name('laporan');

Route::get('/layanan/kantor-samsat', function(){ return view('kantor-samsat'); })->name('layanan.kantor-samsat');
Route::get('/layanan/samsat-corner', function(){ return view('samsat-corner'); })->name('layanan.samsat-corner');
Route::get('/layanan/samsat-bergerak', function(){ return view('samsat-bergerak'); })->name('layanan.samsat-bergerak');
Route::get('/layanan/samsat-keliling', function(){ return view('samsat-keliling'); })->name('layanan.samsat-keliling');
Route::get('/layanan/pelantar-emas', function(){ return view('pelantar-emas'); })->name('layanan.pelantar-emas');
Route::get('/layanan/jadwal-samsat', function(){ return view('jadwal-samsat'); })->name('layanan.jadwal-samsat');

Route::get('/lainnya/tanya-kami', function(){ return view('tanya-kami'); })->name('lainnya.tanya-kami');