<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SucursalController;
use App\Http\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('products')->group(function(){
    Route::get('/',[ProductController::class, 'getProducts']) ->middleware(Authenticate::class);
    Route::post('/new',[ProductController::class, 'newProduct']);
    Route::get('/{id}', [ProductController::class, 'getProduct']);
    Route::put('/{id}', [ProductController::class, 'updateProduct']);
    Route::delete('/{id}', [ProductController::class, 'destroyProduct']);
});

Route::prefix('auth')->group(function(){
    Route::post('/register',[AuthController::class, 'register']);
    Route::post('/login',[AuthController::class, 'login']);
});


Route::prefix('sucursales')->group(function(){
    Route::post('/new',[SucursalController::class, 'createSucursal']);
    Route::get('/', [SucursalController::class, 'getSucursales']);
    Route::get('/{id}', [SucursalController::class, 'getSucursal']);
});
