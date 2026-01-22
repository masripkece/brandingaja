<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda.index');
});

Route::get('/tentang-kami', function () {
    return view('beranda.tentang');
});
Route::get('/layanan', function () {
    return view('beranda.layanan');
});
Route::get('/client', function () {
    return view('beranda.client');
});
Route::get('/jaringan', function () {
    return view('beranda.jaringan');
});





