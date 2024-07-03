<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KementrianController;

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


// Kementrian Controller
Route::get('/profile/kementrian-sekben', [KementrianController::class, 'sekben']);
Route::get('/profile/kementrian-pembedayaan-perempuan', [KementrianController::class, 'pemberdayaan_perempuan']);
Route::get('/profile/kementrian-media-kreatif', [KementrianController::class, 'medkraf']);
Route::get('/profile/kementrian-advokesma', [KementrianController::class, 'advokesma']);
Route::get('/profile/kementrian-ilpres', [KementrianController::class, 'ilpres']);
Route::get('/profile/kementrian-luar-negeri', [KementrianController::class, 'dagri']);
Route::get('/profile/kementrian-sosial-politik', [KementrianController::class, 'sospol']);
Route::get('/profile/kementrian-pengmaspar', [KementrianController::class, 'pengmaspar']);
Route::get('/profile/kementrian-ekonomi-kreatif', [KementrianController::class, 'ekraf']);
Route::get('/profile/kementrian-prada', [KementrianController::class, 'prada']);
Route::get('/profile/kementrian-keagamaan', [KementrianController::class, 'keagamaan']);

