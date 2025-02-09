<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/db-test', function () {
    try {
        DB::connection()->getPdo();
        return response()->json(['message' => 'Conexión exitosa a la base de datos']);
    } catch (\Exception $e) {
        return response()->json(['error' => 'No se pudo conectar a la base de datos', 'message' => $e->getMessage()], 500);
    }
});