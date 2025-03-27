<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ItensController;
use App\Http\Controllers\PedidosController;

Route::prefix('pedidos')->group(function () {
    Route::get('/', [PedidosController::class, 'index']); // Listar todos pedidos
    Route::post('/', [PedidosController::class, 'store']); // Criar novo pedido
    Route::get('/{id}', [PedidosController::class, 'show']); // Mostrar um pedido específico
    Route::put('/{id}', [PedidosController::class, 'update']); // Atualizar um pedido
    Route::delete('/{id}', [PedidosController::class, 'destroy']); // Excluir um pedido

    // Rotas para gerenciar itens do pedido
    Route::get('/{id}/itens', [PedidosController::class, 'items']); // Listar itens do pedido
    Route::post('/{id}/itens', [PedidosController::class, 'addItem']); // Adicionar item ao pedido
    Route::put('/{orderId}/itens/{itemId}', [PedidosController::class, 'updateItem']); // Atualizar item no pedido
    Route::delete('/{orderId}/itens/{itemId}', [PedidosController::class, 'removeItem']); // Remover item do pedido
});

// Rotas para Itens (Items)
Route::prefix('itens')->group(function () {
    Route::get('/', [ItensController::class, 'index']); // Listar todos itens
    Route::post('/', [ItensController::class, 'store']); // Criar novo item
    Route::get('/{id}', [ItensController::class, 'show']); // Mostrar um item específico
    Route::put('/{id}', [ItensController::class, 'update']); // Atualizar um item
    Route::delete('/{id}', [ItensController::class, 'destroy']); // Excluir um item

    // Rotas para ver pedidos que contêm o item
    Route::get('/{id}/orders', [ItensController::class, 'pedido']); // Listar pedidos que contêm o item
});
