<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrito;
use App\Models\Producto;
use App\Models\CarritoItem;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $carrito = Carrito::where('user_id', Auth::id())->with('items.producto')->first();
        $total = $carrito ? $carrito->items->sum('subtotal') : 0;
        return view('cart.index', compact('carrito', 'total'));
    }

    public function add(Request $request)
    {
        $producto = Producto::findOrFail($request->producto_id);
        $carrito = Carrito::firstOrCreate(['user_id' => Auth::id()]);

        $item = $carrito->items()->where('producto_id', $producto->id)->first();

        if ($item) {
            $item->cantidad += 1;
        } else {
            $item = new CarritoItem([
                'producto_id' => $producto->id,
                'cantidad' => 1,
                'subtotal' => $producto->precio
            ]);
        }

        $item->subtotal = $item->cantidad * $producto->precio;
        $carrito->items()->save($item);

        return redirect()->route('carrito.index')->with('success', 'Producto agregado al carrito.');
    }

    public function remove(Request $request)
    {
        $carrito = Carrito::where('user_id', Auth::id())->firstOrFail();
        $item = $carrito->items()->where('producto_id', $request->producto_id)->firstOrFail();
        $item->delete();

        return redirect()->route('carrito.index')->with('success', 'Producto eliminado del carrito.');
    }

    public function clear()
    {
        $carrito = Carrito::where('user_id', Auth::id())->firstOrFail();
        $carrito->items()->delete();

        return redirect()->route('carrito.index')->with('success', 'Carrito vacío.');
    }

    public function checkout()
    {
        // Implementar el proceso de checkout
    }
}
