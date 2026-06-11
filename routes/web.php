<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
});


Route::get('/tentang', function () {
    return view('pages.tentang');
});


Route::get('/portofolio', function () {
    return view('pages.portofolio');
});


Route::get('/blog', function () {
    return view('pages.blog');
});


Route::get('/kontak', function () {
    return view('pages.kontak');
});
