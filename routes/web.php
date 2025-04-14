<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

// Rota principal
Route::view('/', 'home');

// Rotas de autenticação
Route::middleware('guest')->group(function () {
    Route::get('/login', function () {
        return view('login');
    })->name('login');

    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
});

// Rotas protegidas por autenticação
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Rotas administrativas
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('index');

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    // Gestão de usuários
    Route::get('/usuarios', [UserController::class, 'index'])->name('usuarios');
    Route::put('/usuarios/{user}/promover', [UserController::class, 'promover'])->name('usuarios.promover');
});
