<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuarioController;

Route::get('/usuario', [UsuarioController::class, 'index']);
Route::get('/usuario/novo', [UsuarioController::class, 'create']);
Route::post('/usuario/salvar', [UsuarioController::class, 'store']);
Route::get('/usuario/editar/{id}', [UsuarioController::class, 'edit']);
Route::post('/usuario/gravar/{id}', [UsuarioController::class, 'update']);
Route::get('/usuario/apagar/{id}', [UsuarioController::class, 'destroy']);
Route::get('/usuario/{id}', [UsuarioController::class, 'show']);

