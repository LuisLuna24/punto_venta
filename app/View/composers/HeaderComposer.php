<?php

namespace App\View\Composers;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class HeaderComposer
{
    public array $rutas;

    public function __construct()
    {
        switch (Auth::user()->id_tipo_usuario) {
            case 1:
                $this->rutas = [
                    ['name' => 'Venta', 'route' => 'admin.ventas.venta', 'img' => 'img/cash-register.svg'],
                    ['name' => 'Sucursales', 'route' => 'admin.sucursales.sucursales', 'img' => 'img/sucursal.svg'],
                    ['name' => 'Empleados', 'route' => 'admin.empleados.empleados', 'img' => 'img/users.svg'],
                    ['name' => 'Categorias', 'route' => 'admin.categorias.categorias', 'img' => 'img/category.svg'],
                ];
                break;
            case 2:
                $this->rutas = [
                    ['name' => 'Venta', 'route' => 'empleaado.ventas.venta', 'img' => 'img/cash-register.svg'],
                    ['name' => 'Inventario', 'route' => 'empleaado.inventory.read', 'img' => 'img/cash-register.svg'],
                ];
                break;
            default:
                $this->rutas = [];
                break;
        }
    }

    public function compose(View $view): void
    {
        $view->with('rutas', $this->rutas);
    }
}
