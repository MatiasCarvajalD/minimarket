<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CecinasController extends Controller
{
    public function index()
    {
        $productos = [
            [
                'nombre' => 'Jamón Cocido',
                'marcas' => [
                    ['nombre' => 'San Jorge', 'precio' => 3500],
                    ['nombre' => 'La Preferida', 'precio' => 3600],
                    ['nombre' => 'Cecinas Llanquihue', 'precio' => 3700],
                ],
                'peso' => '250g',
                'imagen' => 'jamon_cocido.jpg'
            ],
            [
                'nombre' => 'Jamón de Pavo',
                'marcas' => [
                    ['nombre' => 'San Jorge', 'precio' => 3800],
                    ['nombre' => 'La Preferida', 'precio' => 3900],
                    ['nombre' => 'Cecinas Llanquihue', 'precio' => 4000],
                ],
                'peso' => '250g',
                'imagen' => 'jamon_pavo.jpg'
            ],
            [
                'nombre' => 'Mortadela',
                'marcas' => [
                    ['nombre' => 'Winter', 'precio' => 1800],
                    ['nombre' => 'La Preferida', 'precio' => 1900],
                    ['nombre' => 'Cecinas Llanquihue', 'precio' => 2000],
                ],
                'peso' => '250g',
                'imagen' => 'mortadela.jpg'
            ],
            [
                'nombre' => 'Salame',
                'marcas' => [
                    ['nombre' => 'Winter', 'precio' => 4200],
                    ['nombre' => 'Cecinas Llanquihue', 'precio' => 4300],
                    ['nombre' => 'La Preferida', 'precio' => 4400],
                ],
                'peso' => '250g',
                'imagen' => 'salame.jpg'
            ],
            [
                'nombre' => 'Salchichón',
                'marcas' => [
                    ['nombre' => 'Winter', 'precio' => 3500],
                    ['nombre' => 'Cecinas Llanquihue', 'precio' => 3600],
                    ['nombre' => 'La Preferida', 'precio' => 3700],
                ],
                'peso' => '250g',
                'imagen' => 'salchichon.jpg'
            ],
            [
                'nombre' => 'Chorizo',
                'marcas' => [
                    ['nombre' => 'San Jorge', 'precio' => 3000],
                    ['nombre' => 'Cecinas Llanquihue', 'precio' => 3100],
                    ['nombre' => 'La Preferida', 'precio' => 3200],
                ],
                'peso' => '250g',
                'imagen' => 'chorizo.jpg'
            ],
            [
                'nombre' => 'Longaniza',
                'marcas' => [
                    ['nombre' => 'Cecinas Llanquihue', 'precio' => 2800],
                    ['nombre' => 'La Preferida', 'precio' => 2900],
                    ['nombre' => 'San Jorge', 'precio' => 3000],
                ],
                'peso' => '250g',
                'imagen' => 'longaniza.jpg'
            ],
            [
                'nombre' => 'Vienesas',
                'marcas' => [
                    ['nombre' => 'San Jorge', 'precio' => 2500],
                    ['nombre' => 'La Preferida', 'precio' => 2600],
                    ['nombre' => 'Cecinas Llanquihue', 'precio' => 2700],
                ],
                'peso' => '250g',
                'imagen' => 'vienesas.jpg'
            ],
            [
                'nombre' => 'Paté',
                'marcas' => [
                    ['nombre' => 'Winter', 'precio' => 1500],
                    ['nombre' => 'Cecinas Llanquihue', 'precio' => 1600],
                    ['nombre' => 'La Preferida', 'precio' => 1700],
                ],
                'peso' => '150g',
                'imagen' => 'pate.jpg'
            ],
            [
                'nombre' => 'Lomo Canadiense',
                'marcas' => [
                    ['nombre' => 'Cecinas Llanquihue', 'precio' => 4500],
                    ['nombre' => 'La Preferida', 'precio' => 4600],
                    ['nombre' => 'San Jorge', 'precio' => 4700],
                ],
                'peso' => '250g',
                'imagen' => 'lomo_canadiense.jpg'
            ],
            [
                'nombre' => 'Cecina Ahumada',
                'marcas' => [
                    ['nombre' => 'Cecinas Llanquihue', 'precio' => 4000],
                    ['nombre' => 'La Preferida', 'precio' => 4100],
                    ['nombre' => 'San Jorge', 'precio' => 4200],
                ],
                'peso' => '250g',
                'imagen' => 'cecina_ahumada.jpg'
            ],
            [
                'nombre' => 'Costillar Ahumado',
                'marcas' => [
                    ['nombre' => 'Cecinas Llanquihue', 'precio' => 5000],
                    ['nombre' => 'La Preferida', 'precio' => 5100],
                    ['nombre' => 'San Jorge', 'precio' => 5200],
                ],
                'peso' => '500g',
                'imagen' => 'costillar_ahumado.jpg'
            ],
        ];

        return view('cecinas.index', compact('productos'));
    }
}
