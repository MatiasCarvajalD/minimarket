<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($category)
    {
        $products = Product::where('category', $category)->get();
        return view('products.index', compact('products'));
    }
}
