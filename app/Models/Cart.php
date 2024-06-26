<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['producto', 'cantidad', 'precio'];

    // Opcional: Puedes agregar funciones adicionales si es necesario
}
