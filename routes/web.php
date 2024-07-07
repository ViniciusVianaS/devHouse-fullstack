<?php

use App\Http\Controllers\HouseController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HouseController::class, 'index'])->name('home-index');

Route::get('/create', function () {
    return view('create');
})->middleware('auth');

Route::get('/dashboard', [HouseController::class, 'dashboard'])->middleware('auth');

Route::post('/houses', [HouseController::class, 'store'])->name('house-store');
Route::get('/houses/{id}', [HouseController::class, 'show'])->name('house-show')->middleware('auth');
Route::get('/edit/{id}', [HouseController::class, 'edit'])->middleware('auth');
Route::put('/update/{id}', [HouseController::class, 'update'])->name('house-update')->middleware('auth');
Route::delete('/houses/{id}', [HouseController::class, 'destroy']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
]);
