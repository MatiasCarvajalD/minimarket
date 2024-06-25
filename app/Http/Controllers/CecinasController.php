<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CecinasController extends Controller
{
    public function index()
    {
        // Lógica para obtener las categorías de cecinas
        return view('cecinas.index');
    }

    public function categoria($categoria)
    {
        // Lógica para obtener los productos de una categoría específica de cecinas
        return view('cecinas.categoria', compact('categoria'));
    }
}
