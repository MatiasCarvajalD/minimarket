<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Oferta;

class HomeController extends Controller
{
    public function index()
    {
        // Obtener productos destacados de la base de datos
        $productosDestacados = Producto::where('destacado', 1)->get();

        // Obtener ofertas de la base de datos
        $ofertas = Oferta::all();

        // Pasar los productos destacados y las ofertas a la vista
        return view('home.index', compact('productosDestacados', 'ofertas'));
    }
}
