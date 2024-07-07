<?php

use App\Http\Controllers\HouseController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HouseController::class, 'index'])->name('home-index');

Route::get('/create', function () {
    return view('create');
});

Route::post('/houses', [HouseController::class, 'store'])->name('house-store');
Route::get('/houses/{id}', [HouseController::class, 'show'])->name('house-show');
Route::get('/edit/{id}', [HouseController::class, 'edit']);
Route::put('/update/{id}', [HouseController::class, 'update'])->name('house-update');
Route::delete('/houses/{id}', [HouseController::class, 'destroy']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
