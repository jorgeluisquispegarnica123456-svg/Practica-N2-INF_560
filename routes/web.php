<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

// Redirigir la raíz directamente al listado de productos
Route::get('/', function () {
    return redirect()->route('productos.index');
});

// Rutas del CRUD de productos
Route::resource('productos', ProductoController::class);