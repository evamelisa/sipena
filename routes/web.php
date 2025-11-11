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

Route::view('/layanan/kantor-samsat', 'kantor-samsat')->name('layanan.kantor-samsat');

Route::view('/layanan/samsat-corner', 'samsat-corner')->name('layanan.samsat-corner');

Route::view('/layanan/samsat-bergerak', 'samsat-bergerak')->name('layanan.samsat-bergerak');

Route::view('/layanan/samsat-keliling', 'samsat-keliling')->name('layanan.samsat-keliling');