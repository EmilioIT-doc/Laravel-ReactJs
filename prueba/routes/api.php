<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\CompraController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');



Route::middleware('auth:sanctum')->group(function () {
    Route::post('/comprar', [CompraController::class, 'realizarCompra']);
    Route::get('/compras', [CompraController::class, 'verComprasAnteriores']);
    
    Route::post('/carrito/agregar', [CarritoController::class, 'agregarAlCarrito']);
    Route::delete('/carrito/eliminar/{nombre}', [CarritoController::class, 'eliminarDelCarrito']);
    Route::delete('/carrito/vaciar', [CarritoController::class, 'vaciarCarrito']);
    
});
