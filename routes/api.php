<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('categoria','App\Http\Controllers\categoriacontroller@getCategoria');
Route::get('categoria/{id}','App\Http\Controllers\categoriacontroller@getCategoriaId');
Route::post('categoria','App\Http\Controllers\categoriacontroller@insertCategoria');
Route::put('categoria/{id}','App\Http\Controllers\categoriacontroller@updateCategoria');
Route::delete('categoria/{id}','App\Http\Controllers\categoriacontroller@deleteCategoria');

// Rutas de Productos
Route::get('producto','App\Http\Controllers\productocontroller@getProducto');
Route::get('producto/{id}','App\Http\Controllers\productocontroller@getProductoId');
Route::post('producto','App\Http\Controllers\productocontroller@insertarProducto');
Route::put('producto/{id}','App\Http\Controllers\productocontroller@updateProductoId');
Route::delete('producto/{id}','App\Http\Controllers\productocontroller@deleteProductoId');
