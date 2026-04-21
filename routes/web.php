<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/layanan', [ServiceController::class, 'index'])->name('services');
Route::get('/layanan/{slug}', [ServiceController::class, 'show'])->name('services.show');
Route::get('/tentang', [PageController::class, 'tentang'])->name('tentang');
Route::get('/kontak/fullscreen', [PageController::class, 'kontakFullscreen'])->name('kontak.fullscreen');
Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');
Route::get('/testimoni', [PageController::class, 'testimoni'])->name('testimoni');
