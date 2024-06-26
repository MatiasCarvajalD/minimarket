<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cecina;

class CecinasController extends Controller
{
    public function index()
    {
        $cecinas = Cecina::all();
        return view('cecinas.index', compact('cecinas'));
    }
}