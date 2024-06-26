<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('cart.index');
    }

    public function add(Request $request)
    {
        $cart = session()->get('cart', []);

        $id = $request->input('producto') . '-' . $request->input('marca');

        if (isset($cart[$id])) {
            $cart[$id]['cantidad'] += $request->input('cantidad');
        } else {
            $cart[$id] = [
                "nombre" => $request->input('producto'),
                "marca" => $request->input('marca'),
                "cantidad" => $request->input('cantidad'),
                "precio" => $request->input('precio'),
                "imagen" => $request->input('imagen') ?? 'default.jpg'
            ];
        }

        session()->put('cart', $cart);
        return redirect()->route('cart.index');
    }

    public function remove(Request $request)
    {
        $cart = session()->get('cart', []);
        $id = $request->input('id');

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.index');
    }
}


