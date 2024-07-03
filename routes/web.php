<?php

use App\Http\Controllers\HouseController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HouseController::class, 'index'])->name('home-index');

Route::get('/register', function () {
    return view('register');
});

Route::post('/houses', [HouseController::class, 'store'])->name('house-store');
Route::get('/houses/{id}', [HouseController::class, 'show'])->name('house-show');