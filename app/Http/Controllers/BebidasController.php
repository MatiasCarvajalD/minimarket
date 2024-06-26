<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bebida;

class BebidasController extends Controller
{
    public function index()
    {
        $bebidas = Bebida::all();
        return view('bebidas.index', compact('bebidas'));
    }
}


