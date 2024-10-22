<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('products')->group(function(){
    Route::get('/',[ProductController::class, 'getProducts']);
});

Route::post('/new',[ProductController::class, 'newProduct']);