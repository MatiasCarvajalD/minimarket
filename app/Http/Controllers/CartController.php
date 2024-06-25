<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        // Lógica para mostrar el carrito
        return view('cart.index');
    }

    public function add(Request $request)
    {
        // Lógica para agregar un producto al carrito
    }

    public function remove(Request $request)
    {
        // Lógica para eliminar un producto del carrito
    }
}
