<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

// Redirect root '/' ke halaman login atau home (tergantung status login)
Route::get('/', function () {
    return auth()->check() ? redirect()->route('home') : redirect()->route('login');
});

// Halaman setelah login
Route::get('/home', [HomeController::class, 'index'])
    ->middleware('auth')  // Hanya pengguna yang sudah login yang bisa mengakses
    ->name('home');

// CRUD Buku
Route::resource('books', BookController::class)->middleware('auth');

// Authentication Routes
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');