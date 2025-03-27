<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('usuarios');
});

Route::get('/second', function () {
    return view('itens');
});
