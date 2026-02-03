<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('beranda.index');
});
Route::get('/mitra', function () {
    return view('beranda.mitra');
})->name('mitra');
Route::get('/pelanggan', function () {
    return view('beranda.pelanggan');
})->name('pelanggan');




