<?php

use App\Http\Controllers\infoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
