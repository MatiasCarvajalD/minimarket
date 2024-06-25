<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalletasController extends Controller
{
    public function index()
    {
        $productos = [
            [
                'nombre' => 'Galletas Trencito ',
                'marca' => 'Nestlé',
                'precio' => 1500,
                'peso' => '180g',
                'imagen' => 'galletas_trencito.jpg'
            ],
            [
                'nombre' => 'Galletas Tritón ',
                'marca' => 'Costa',
                'precio' => 1200,
                'peso' => '126g',
                'imagen' => 'galletas_triton.jpg'
            ],
            [
                'nombre' => 'Galletas Frac ',
                'marca' => 'Costa',
                'precio' => 1300,
                'peso' => '150g',
                'imagen' => 'galletas_frac.jpg'
            ],
            [
                'nombre' => 'Galletas Cerealitas ',
                'marca' => 'McKay',
                'precio' => 1600,
                'peso' => '170g',
                'imagen' => 'galletas_cerealitas.jpg'
            ],
            [
                'nombre' => 'Galletas Macay ',
                'marca' => 'McKay',
                'precio' => 1100,
                'peso' => '200g',
                'imagen' => 'galletas_maria.jpg'
            ],
            [
                'nombre' => 'Galletas Vizzio ',
                'marca' => 'Costa',
                'precio' => 1800,
                'peso' => '165g',
                'imagen' => 'galletas_vizzio.jpg'
            ],
            [
                'nombre' => 'Galletas Selz ',
                'marca' => 'McKay',
                'precio' => 1200,
                'peso' => '170g',
                'imagen' => 'galletas_selz.jpg'
            ],
            [
                'nombre' => 'Galletas Malla ',
                'marca' => 'McKay',
                'precio' => 1400,
                'peso' => '180g',
                'imagen' => 'galletas_malla.jpg'
            ],
            [
                'nombre' => 'Galletas Óreo ',
                'marca' => 'Nabisco',
                'precio' => 1500,
                'peso' => '154g',
                'imagen' => 'galletas_oreo.jpg'
            ],
            [
                'nombre' => 'Galletas Mora Mora ',
                'marca' => 'Costa',
                'precio' => 1300,
                'peso' => '160g',
                'imagen' => 'galletas_mora_mora.jpg'
            ],
            [
                'nombre' => 'Galletas Soda (Sin Sal)',
                'marca' => 'McKay',
                'precio' => 1100,
                'peso' => '170g',
                'imagen' => 'galletas_soda.jpg'
            ],
            [
                'nombre' => 'Galletas Frutigran (Avena y Pasas)',
                'marca' => 'Nestlé',
                'precio' => 1600,
                'peso' => '190g',
                'imagen' => 'galletas_frutigran.jpg'
            ],
        ];

        return view('galletas.index', compact('productos'));
    }
}
