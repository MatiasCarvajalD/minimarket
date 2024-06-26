<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BebidasController extends Controller
{
    public function index()
    {
        $productos = [
            [
                'nombre' => 'Coca-Cola',
                'tamaños' => [
                    ['litros' => '500 ml', 'precio' => 900],
                    ['litros' => '1 litro', 'precio' => 1200],
                    ['litros' => '1.5 litros', 'precio' => 1500],
                    ['litros' => '3 litros', 'precio' => 2500],
                ],
                'imagen' => 'coca_cola.jpg'
            ],
            [
                'nombre' => 'Pepsi',
                'tamaños' => [
                    ['litros' => '500 ml', 'precio' => 850],
                    ['litros' => '1 litro', 'precio' => 1100],
                    ['litros' => '1.5 litros', 'precio' => 1400],
                    ['litros' => '3 litros', 'precio' => 2400],
                ],
                'imagen' => 'pepsi.jpg'
            ],
            [
                'nombre' => 'Fanta',
                'tamaños' => [
                    ['litros' => '500 ml', 'precio' => 900],
                    ['litros' => '1 litro', 'precio' => 1200],
                    ['litros' => '1.5 litros', 'precio' => 1500],
                    ['litros' => '3 litros', 'precio' => 2500],
                ],
                'imagen' => 'fanta.jpg'
            ],
            [
                'nombre' => 'Sprite',
                'tamaños' => [
                    ['litros' => '500 ml', 'precio' => 900],
                    ['litros' => '1 litro', 'precio' => 1200],
                    ['litros' => '1.5 litros', 'precio' => 1500],
                    ['litros' => '3 litros', 'precio' => 2500],
                ],
                'imagen' => 'sprite.jpg'
            ],
            [
                'nombre' => 'Bebida energética Red Bull',
                'tamaños' => [
                    ['litros' => '250 ml', 'precio' => 2000],
                    ['litros' => '355 ml', 'precio' => 2800],
                ],
                'imagen' => 'red_bull.jpg'
            ],
            [
                'nombre' => 'Bebida energética Monster',
                'tamaños' => [
                    ['litros' => '473 ml', 'precio' => 2300],
                    ['litros' => '710 ml', 'precio' => 3000],
                ],
                'imagen' => 'monster.jpg'
            ],
            [
                'nombre' => 'Bebida energética Vía',
                'tamaños' => [
                    ['litros' => '250 ml', 'precio' => 1500],
                    ['litros' => '500 ml', 'precio' => 1800],
                ],
                'imagen' => 'via.jpg'
            ],
            [
                'nombre' => 'Agua mineral Cachantún',
                'tamaños' => [
                    ['litros' => '500 ml', 'precio' => 700],
                    ['litros' => '1 litro', 'precio' => 900],
                    ['litros' => '1.5 litros', 'precio' => 1000],
                    ['litros' => '2 litros', 'precio' => 1200],
                ],
                'imagen' => 'cachantun.jpg'
            ],
            [
                'nombre' => 'Agua mineral Vital',
                'tamaños' => [
                    ['litros' => '500 ml', 'precio' => 650],
                    ['litros' => '1 litro', 'precio' => 850],
                    ['litros' => '1.5 litros', 'precio' => 900],
                    ['litros' => '2 litros', 'precio' => 1100],
                ],
                'imagen' => 'vital.jpg'
            ],
            [
                'nombre' => 'Jugos Watts',
                'tamaños' => [
                    ['litros' => '200 ml', 'precio' => 500],
                    ['litros' => '500 ml', 'precio' => 900],
                    ['litros' => '1 litro', 'precio' => 1200],
                ],
                'imagen' => 'watts.jpg'
            ],
            [
                'nombre' => 'Jugos Andina',
                'tamaños' => [
                    ['litros' => '200 ml', 'precio' => 450],
                    ['litros' => '500 ml', 'precio' => 850],
                    ['litros' => '1 litro', 'precio' => 1100],
                ],
                'imagen' => 'andina.jpg'
            ],
            [
                'nombre' => 'Néctar de fruta Vivo',
                'tamaños' => [
                    ['litros' => '200 ml', 'precio' => 550],
                    ['litros' => '500 ml', 'precio' => 1000],
                    ['litros' => '1 litro', 'precio' => 1300],
                ],
                'imagen' => 'vivo.jpg'
            ],
            [
                'nombre' => 'Té helado Lipton',
                'tamaños' => [
                    ['litros' => '500 ml', 'precio' => 900],
                    ['litros' => '1 litro', 'precio' => 1200],
                    ['litros' => '1.5 litros', 'precio' => 1500],
                ],
                'imagen' => 'lipton.jpg'
            ],
            [
                'nombre' => 'Bebida de soya Ades',
                'tamaños' => [
                    ['litros' => '200 ml', 'precio' => 600],
                    ['litros' => '500 ml', 'precio' => 1200],
                    ['litros' => '1 litro', 'precio' => 1600],
                ],
                'imagen' => 'ades.jpg'
            ],
            [
                'nombre' => 'Bebida isotónica Gatorade',
                'tamaños' => [
                    ['litros' => '500 ml', 'precio' => 1200],
                    ['litros' => '1 litro', 'precio' => 2000],
                ],
                'imagen' => 'gatorade.jpg'
            ],
            [
                'nombre' => 'Bebida isotónica Powerade',
                'tamaños' => [
                    ['litros' => '500 ml', 'precio' => 1100],
                    ['litros' => '1 litro', 'precio' => 1800],
                ],
                'imagen' => 'powerade.jpg'
            ],
        ];

        return view('bebidas.index', compact('productos'));
    }
}

