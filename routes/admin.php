<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;


Route::get('/panel', function () {
    return view('paneles.admin');
})->name('paneles.admin');

Route::get('/venta', function () {
    return view('usuarios.ventas.venta');
})->name('ventas.venta');

Route::get('/sucursales', function () {
    return view('usuarios.sucursales.sucursales');
})->name('sucursales.sucursales');

Route::get('/empleados', function () {
    return view('usuarios.empleados.empleados');
})->name('empleados.empleados');

Route::get('/categorias', function () {
    return view('usuarios.categorias.categorias');
})->name('categorias.categorias');
