<?php

use App\Http\Controllers\HouseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/houses', [HouseController::class, 'store'])->name('house-store');