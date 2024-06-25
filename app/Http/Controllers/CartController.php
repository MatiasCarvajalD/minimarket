<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index()
    {
        $cart = Session::get('cart', []);
        return view('carrito.index', compact('cart'));
    }

    public function add(Request $request)
    {
        $producto = $request->input('producto');
        $cantidad = $request->input('cantidad');
        $precio = $request->input('precio');

        $cart = Session::get('cart', []);

        if (isset($cart[$producto])) {
            $cart[$producto]['cantidad'] += $cantidad;
        } else {
            $cart[$producto] = [
                'cantidad' => $cantidad,
                'precio' => $precio
            ];
        }

        Session::put('cart', $cart);

        return redirect()->route('carrito')->with('success', 'Producto agregado al carrito');
    }

    public function remove(Request $request)
    {
        $producto = $request->input('producto');

        $cart = Session::get('cart', []);

        if (isset($cart[$producto])) {
            unset($cart[$producto]);
        }

        Session::put('cart', $cart);

        return redirect()->route('carrito')->with('success', 'Producto eliminado del carrito');
    }
}
