<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Panaderia;

class PanaderiaController extends Controller
{
    public function index()
    {
        $productos = Panaderia::all();
        return view('panaderia.index', compact('productos'));
    }
}
