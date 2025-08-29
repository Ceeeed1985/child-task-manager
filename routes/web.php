<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;


Route::get('/', [IndexController::class, "home"])->name('home');

Route::get('/register', [AuthController::class, "showSignUp"])->name('register');
Route::post('/register', [AuthController::class, "signUp"])->name('registration.register');
Route::get('/login', [AuthController::class, "showFormLogin"])->name('login');
Route::post('/login', [AuthController::class, "login"])->name('login.submit');