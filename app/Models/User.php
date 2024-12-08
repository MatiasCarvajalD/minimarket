<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'usuarios';
    protected $primaryKey = 'rut_usuario';
    public $incrementing = false; // Si `rut_usuario` no es autoincremental
    protected $keyType = 'string';

    protected $fillable = [
        'rut_usuario',
        'nombre_usuario',
        'email',
        'password',
        'telefono',
        'direccion',
        'rol',
    ];

    public function carrito()
    {
        return $this->hasMany(Carrito::class, 'rut_usuario', 'rut_usuario');
    }

    public function ventas()
    {
        return $this->hasMany(Venta::class, 'rut_usuario', 'rut_usuario');
    }
}
