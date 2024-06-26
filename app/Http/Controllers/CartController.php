<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Producto;

class CartController extends Controller
{
    public function index()
    {
        $cart = Session::get('cart', []);
        return view('carrito.index', compact('cart'));
    }

    public function add(Request $request)
    {
        $producto = Producto::find($request->producto_id);

        if (!$producto) {
            return redirect()->route('home.index')->with('error', 'Producto no encontrado');
        }

        $cart = Session::get('cart', []);

        if (isset($cart[$producto->id])) {
            $cart[$producto->id]['cantidad'] += $request->cantidad;
        } else {
            $cart[$producto->id] = [
                'nombre' => $producto->nombre,
                'precio' => $producto->precio,
                'cantidad' => $request->cantidad,
            ];
        }

        Session::put('cart', $cart);

        return redirect()->route('carrito.index')->with('success', 'Producto agregado al carrito');
    }

    public function remove(Request $request)
    {
        $cart = Session::get('cart', []);
        unset($cart[$request->producto_id]);

        Session::put('cart', $cart);

        return redirect()->route('carrito.index')->with('success', 'Producto eliminado del carrito');
    }
}
