<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\User;
use App\Models\Otro;

class ReportController extends Controller
{
    public function topSellingProducts()
    {
        $products = CartItem::select('producto', \DB::raw('SUM(cantidad) as total_cantidad'))
            ->groupBy('producto')
            ->orderBy('total_cantidad', 'desc')
            ->take(10)
            ->get();

        return view('reports.mejor_vendidos', compact('products'));
    }

    public function totalIncomeByCategory()
    {
        $categories = Otro::select('categoria', \DB::raw('SUM(precio * cantidad) as total_income'))
            ->join('cart_items', 'otros.id', '=', 'cart_items.otro_id')
            ->groupBy('categoria')
            ->orderBy('total_income', 'desc')
            ->get();

        return view('reports.ingresos_categoria', compact('categories'));
    }

    public function newUsersLastMonth()
    {
        $users = User::where('created_at', '>=', now()->subMonth())
            ->orderBy('created_at', 'desc')
            ->get();

        return view('reports.nuevos_usuarios', compact('users'));
    }
}
