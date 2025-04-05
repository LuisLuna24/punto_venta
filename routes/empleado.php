<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;


Route::get('/panel', function () {
    return view('paneles.empleados');
})->name('paneles.empleados');


Route::get('/venta', function () {
    return view('usuarios.ventas.venta');
})->name('ventas.venta');

Route::get('/sucursal/{id}/inventario', function ($id) {
    // Aquí deberías validar que la sucursal exista
    return view('usuarios.sucursales.inventory.read', [
        'idSucursal' => $id
    ]);
})->name('inventory.read');
