<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\SanctionController;
use App\Http\Controllers\DashboardController;


Route::get('/', [IndexController::class, "home"])->name('home');

Route::get('/register', [AuthController::class, "showSignUp"])->name('register');
Route::post('/register', [AuthController::class, "signUp"])->name('registration.register');
Route::get('/login', [AuthController::class, "showFormLogin"])->name('login');
Route::post('/login', [AuthController::class, "login"])->name('login.submit');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::post('/logout', [AuthController::class, "logout"])->name('logout');

Route::get('/members', [MemberController::class, 'index'])->name('members.index')->middleware('auth');
Route::get('/members/create', [MemberController::class, 'create'])->name('members.create')->middleware('auth');
Route::post('/members/create', [MemberController::class, 'store'])->name('members.store')->middleware('auth');
Route::get('/members/{id}', [MemberController::class, 'show'])->name('members.show')->middleware('auth');
Route::get('/members/edit/{id}', [MemberController::class, 'edit'])->name('members.edit')->middleware('auth');
Route::put('/members/update/{id}', [MemberController::class, 'update'])->name('members.update')->middleware('auth');
Route::delete('/members/{id}', [MemberController::class, 'delete'])->name('members.delete')->middleware('auth');

Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index')->middleware('auth');
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create')->middleware('auth');
Route::post('/tasks/store', [TaskController::class, 'store'])->name('tasks.store')->middleware('auth');
Route::get('/tasks/edit/{id}', [TaskController::class, 'edit'])->name('tasks.edit')->middleware('auth');
Route::put('/tasks/update/{id}', [TaskController::class, 'update'])->name('tasks.update')->middleware('auth');
Route::delete('/tasks/{id}', [TaskController::class, 'delete'])->name('tasks.delete')->middleware('auth');

Route::get('/sanctions', [SanctionController::class, 'index'])->name('sanctions.index')->middleware('auth');
Route::get('/sanctions/create', [SanctionController::class, 'create'])->name('sanctions.create')->middleware('auth');
Route::post('/sanctions/store', [SanctionController::class, 'store'])->name('sanctions.store')->middleware('auth');
