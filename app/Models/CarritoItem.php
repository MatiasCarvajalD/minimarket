<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarritoItem extends Model
{
    use HasFactory;

    protected $fillable = ['carrito_id', 'producto_id', 'cantidad', 'subtotal'];

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}
