<?php

use App\Http\Controllers\HouseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/readHouse', function () {
    return view('readHouse');
});

Route::post('/houses', [HouseController::class, 'store'])->name('house-store');
Route::get('/', [HouseController::class, 'index'])->name('home-index');
Route::get('/houses/{id}', [HouseController::class, 'show']);