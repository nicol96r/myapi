<?php

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProductoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('listarProductos',[ProductoController::class, 'index']);
Route::get('producto/{id}',[ProductoController::class, 'show']);
Route::post('crearProducto',[ProductoController::class,'store']);
Route::put('actualizarProducto/{id}', [ProductoController::class, 'update']);
Route::delete('eliminarProducto/{id}',[ProductoController::class, 'destroy']);


Route::get('listarUsuarios',[UsuarioController::class, 'index']);
Route::get('usuario/{id}',[UsuarioController::class, 'show']);
Route::post('crearUsuario',[UsuarioController::class,'store']);
Route::put('actualizarUsuario/{id}', [UsuarioController::class, 'update']);
Route::delete('eliminarUsuario/{id}',[UsuarioController::class, 'destroy']);

Route::get('listarPedidos',[UsuarioController::class, 'index']);
Route::get('pedido/{id}',[UsuarioController::class, 'show']);
Route::post('crearPedido',[UsuarioController::class,'store']);
Route::put('actualizarPedido/{id}', [UsuarioController::class, 'update']);
Route::delete('eliminarPedido/{id}',[UsuarioController::class, 'destroy']);

