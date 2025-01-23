<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\AuthController;
Route::get('/', function () {
    return view('welcome');
});

// Route for the cars view
Route::get('/cars', function () {
    return view('cars');
})->name('cars');

Route::get('/auth', [AuthController::class, 'showAuthForm'])->name('auth');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/home', function () {
    return view('home'); // Ensure you have a 'home.blade.php' view
})->name('home');
