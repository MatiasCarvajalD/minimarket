<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home.index');
    }

    public function cecinas()
    {
        return view('cecinas.index');
    }

    public function bebidas()
    {
        return view('bebidas.index');
    }

    public function galletas()
    {
        return view('galletas.index');
    }

    public function lacteos()
    {
        return view('lacteos.index');
    }

    public function otros()
    {
        return view('otros.index');
    }

    public function panaderia()
    {
        return view('panaderia.index');
    }
}

