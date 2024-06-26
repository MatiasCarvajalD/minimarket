<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Otro extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'marca', 'precio', 'peso', 'imagen'];
}
