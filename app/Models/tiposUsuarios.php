<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tiposUsuarios extends Model
{
    protected $table = 'tipos_usuarios';

    protected $primaryKey = 'id_tipo_usuario';
    protected $fillable = ['descripcion'];

    use HasFactory;

}
