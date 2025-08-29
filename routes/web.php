<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;


Route::get('/', [IndexController::class, "index"]);

Route::get('/register', [AuthController::class, "showSignUp"])->name('register');
Route::post('/register', [AuthController::class, "signUp"])->name('registration.register');