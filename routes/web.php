<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/vokasi-news', function () {
    return view('news.index');
});

Route::get('/vokasi-news/detail', function () {
    return view('news.detail');
});
