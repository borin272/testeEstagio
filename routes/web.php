<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ItensController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\UsersController;

Route::view('/', 'index');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/registrar', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/registrar', [AuthController::class, 'register'])->name('register.submit');

Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');
Route::post('/users', [AuthController::class, 'register'])->name('usuarios.store');
