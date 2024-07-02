<?php

use App\Http\Controllers\HouseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/houses', function () {
    return view('houses');
});

Route::post('/houses', [HouseController::class, 'store'])->name('house-store');

Route::get('/', [HouseController::class, 'index'])->name('home-index');