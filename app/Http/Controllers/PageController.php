<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function cecinas()
    {
        return view('cecinas');
    }

    public function bebidas()
    {
        return view('bebidas');
    }

    public function galletas()
    {
        return view('galletas');
    }

    public function otros()
    {
        return view('otros');
    }

    public function carrito()
    {
        return view('carrito');
    }
}
