<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('products')->group(function(){
    Route::get('/',[ProductController::class, 'getProducts']);
    Route::post('/new',[ProductController::class, 'newProduct']);
    Route::get('/{id}', [ProductController::class, 'getProduct']);
    Route::put('/{id}', [ProductController::class, 'updateProduct']);
    Route::delete('/{id}', [ProductController::class, 'destroyProduct']);
});

Route::prefix('auth')->group(function(){
    Route::post('/register',[AuthController::class, 'register']);
    Route::post('/login',[AuthController::class, 'login']);
});
