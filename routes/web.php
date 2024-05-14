<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/kinerja', function () {
    return view('kinerja');
});
Route::get('/profile', function () {
    return view('profile');
});

Route::get('/vokasi-news', function () {
    return view('news');
});

Route::get('/vokasi-news/detail', function () {
    return view('news.detail');
});
