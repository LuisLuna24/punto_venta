<?php

namespace App\Traits;

use Illuminate\Support\Facades\Auth;

trait HasPermisos
{
    public $createPermiso = true;
    public $editPermiso = true;
    public $estatusPermiso = true;
    public $modulo; // Se puede cambiar en cada componente

    public function cargarPermisos()
    {
        $user = Auth::user();

        // Si el usuario es tipo 1, mantiene los permisos en false y se sale de la función
        if ($user->id_tipo_usuario == 1) {
            $this->createPermiso = false;
            $this->editPermiso = false;
            $this->estatusPermiso = false;
        }

        // Verificar si el usuario tiene un empleado y un tipo de empleado con permisos
        if ($user->empleado && $user->empleado->tipo_empleado && !empty($user->empleado->tipo_empleado->permisos)) {
            foreach ($user->empleado->tipo_empleado->permisos as $permiso) {
                if ($permiso->modulo && $permiso->modulo->id_modulo == $this->modulo) {
                    $this->createPermiso = $permiso->crear == 1 ? false : true;
                    $this->editPermiso = $permiso->editar  == 1 ? false : true;
                    $this->estatusPermiso = $permiso->deshabilitar  == 1 ? false : true;
                    break; // Salimos del bucle cuando encontramos el módulo
                } else {
                    return;
                }
            }
        }
    }
}
