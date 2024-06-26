<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lacteo;

class LacteosController extends Controller
{
    public function index()
    {
        $categorias = Lacteo::select('nombre')->distinct()->pluck('nombre');
        $lacteos = Lacteo::all()->groupBy('nombre');
        return view('lacteos.index', compact('lacteos', 'categorias'));
    }

    public function categoria($categoria)
    {
        $lacteos = Lacteo::where('nombre', $categoria)->get();
        return view('lacteos.categoria', compact('lacteos', 'categoria'));
    }
}
