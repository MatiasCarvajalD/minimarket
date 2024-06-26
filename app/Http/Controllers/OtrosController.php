<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Otro;

class OtrosController extends Controller
{
    public function index()
    {
        $categorias = Otro::select('categoria')->distinct()->pluck('categoria');
        $productos = Otro::all()->groupBy('categoria');
        return view('otros.index', compact('productos', 'categorias'));
    }

    public function categoria($categoria)
    {
        $productos = Otro::where('categoria', $categoria)->get();
        return view('otros.categoria', compact('productos', 'categoria'));
    }
}
