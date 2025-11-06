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