<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;


Route::get('/', [IndexController::class, "home"])->name('home');

Route::get('/register', [AuthController::class, "showSignUp"])->name('register');
Route::post('/register', [AuthController::class, "signUp"])->name('registration.register');
Route::get('/login', [AuthController::class, "showFormLogin"])->name('login');
Route::post('/login', [AuthController::class, "login"])->name('login.submit');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::post('/logout', [AuthController::class, "logout"])->name('logout');

Route::get('/members', [MemberController::class, 'index'])->name('members.index')->middleware('auth');
Route::get('/members/create', [MemberController::class, 'create'])->name('members.create')->middleware('auth');