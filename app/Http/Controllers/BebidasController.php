<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BebidasController extends Controller
{
    public function index()
    {
        // Lógica para obtener las categorías de bebidas
        return view('bebidas.index');
    }

    public function categoria($categoria)
    {
        // Lógica para obtener los productos de una categoría específica de bebidas
        return view('bebidas.categoria', compact('categoria'));
    }
}
