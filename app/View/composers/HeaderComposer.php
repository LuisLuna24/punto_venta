<?php

namespace App\View\Composers;

use Illuminate\View\View;

class HeaderComposer
{
    public array $rutas;

    public function __construct()
    {
        $this->rutas = [
            ['name' => 'Dashboard'],
            ['name' => 'Usuarios'],
            ['name' => 'Rutas'],
            ['name' => 'Flujos'],
            ['name' => 'Estadísticas'],
            ['name' => 'Configuración'],
            ['name' => 'Ayuda'],
        ];
    }

    public function compose(View $view): void
    {
        $view->with('rutas', $this->rutas);
    }
}
