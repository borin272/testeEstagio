<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

// Rota principal
Route::view('/', 'home');

// Autenticação
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::post('/login', [AuthController::class, 'login']);

// Login (GET)
Route::get('/login', function () {
    return view('login');
})->name('login'); // <- Rota nomeada

// Dashboard (apenas autenticados)
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');

// Admin (middleware 'admin')
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return 'Painel Admin';
    });

    // Rotas administrativas
    Route::get('/admin/usuarios', [UserController::class, 'index'])->name('admin.usuarios');
    Route::put('/admin/usuarios/{user}/promover', [UserController::class, 'promover'])->name('admin.usuarios.promover');
});
