<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route for the cars view
Route::get('/cars', function () {
    return view('cars'); // Assuming your cars view is located at resources/views/cars/index.blade.php
})->name('cars');
