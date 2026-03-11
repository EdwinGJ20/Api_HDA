<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use HasFactory;

    protected $table = 'usuario'; // Nombre de tu tabla en la imagen
    protected $primaryKey = 'ID_usuario';
    
    // Si no usas las columnas created_at y updated_at de Laravel, pon esto en false:
    public $timestamps = false;

    protected $fillable = [
        'Nombre',
        'Correo_Electronico',
        'Fecha_Registro',
        'Rol',
        'Edad',
        'Localidad'
    ];
}