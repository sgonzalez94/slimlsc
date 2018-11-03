<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model{

    protected $table = 'usuario';

    protected $fillable = [
        'nombre',
        'apellidos',
        'fecha_nacimiento',
        'nickname',
        'correo',
        'password',
        'genero'
    ];

}