<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtrosController extends Controller
{
    public function index()
    {
        // Lógica para obtener las categorías de otros productos
        return view('otros.index');
    }

    public function categoria($categoria)
    {
        // Lógica para obtener los productos de una categoría específica de otros productos
        return view('otros.categoria', compact('categoria'));
    }
}
