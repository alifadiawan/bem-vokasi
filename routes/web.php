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
Route::get('/kementrian-sekben', [KementrianController::class, 'sekben']);
Route::get('/kementrian-pembedayaan-perempuan', [KementrianController::class, 'pemberdayaan_perempuan']);
Route::get('/kementrian-media-kreatif', [KementrianController::class, 'medkraf']);
Route::get('/kementrian-advokesma', [KementrianController::class, 'advokesma']);
Route::get('/kementrian-ilpres', [KementrianController::class, 'ilpres']);
Route::get('/kementrian-luar-negeri', [KementrianController::class, 'dagri']);
Route::get('/kementrian-sosial-politik', [KementrianController::class, 'sospol']);
Route::get('/kementrian-pengmaspar', [KementrianController::class, 'pengmaspar']);
Route::get('/kementrian-ekonomi-kreatif', [KementrianController::class, 'ekraf']);
Route::get('/kementrian-prada', [KementrianController::class, 'prada']);
Route::get('/kementrian-keagamaan', [KementrianController::class, 'keagamaan']);