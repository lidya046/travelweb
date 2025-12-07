<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PaketController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');

Route::resource('paket', PaketController::class);
