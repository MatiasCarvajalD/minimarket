<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galleta;

class GalletasController extends Controller
{
    public function index()
    {
        $galletas = Galleta::all();
        return view('galletas.index', compact('galletas'));
    }
}
