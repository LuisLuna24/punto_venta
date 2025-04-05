<?php

namespace Database\Seeders;

use App\Models\tiposUsuarios;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipo = new tiposUsuarios;
        $tipo->id_tipo_usuario = 1;
        $tipo->descripcion = 'Administrador';
        $tipo->save();

        $tipo1 = new tiposUsuarios;
        $tipo1->id_tipo_usuario = 2;
        $tipo1->descripcion = 'Empleado';
        $tipo1->save();

        $usuario = new User;
        $usuario->name = 'Luis Luna';
        $usuario->email = 'lued1006@gmail.com';
        $usuario->id_tipo_usuario = 1;
        $usuario->password = bcrypt('Hmcnjsa1*');
        $usuario->save();

        $usuario1 = new User;
        $usuario1->name = 'Luis Luna';
        $usuario1->email = 'lued1009@gmail.com';
        $usuario1->id_tipo_usuario = 2;
        $usuario1->password = bcrypt('Hmcnjsa1*');
        $usuario1->save();
    }
}
