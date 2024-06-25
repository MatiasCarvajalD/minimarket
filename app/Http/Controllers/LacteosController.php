<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LacteosController extends Controller
{
    private $categorias = [
        'leche_entera' => 'Leche Entera',
        'leche_descremada' => 'Leche Descremada',
        'leche_semidescremada' => 'Leche Semidescremada',
        'yogur' => 'Yogur',
        'queso' => 'Queso',
        'mantequilla' => 'Mantequilla',
        'crema' => 'Crema',
        'quesillo' => 'Quesillo',
        'leche_condensada' => 'Leche Condensada',
        'leche_evaporada' => 'Leche Evaporada',
        'queso_rallado' => 'Queso Rallado',
        'postres_lacteos' => 'Postres Lácteos',
        'manjar' => 'Manjar'
    ];

    public function index()
    {
        return view('lacteos.index', ['categorias' => $this->categorias]);
    }

    public function categoria($categoria)
    {
        if (!array_key_exists($categoria, $this->categorias)) {
            abort(404);
        }

        $data = [
            'categoria' => $this->categorias[$categoria],
            'categorias' => $this->categorias,
            'productos' => $this->getProductosPorCategoria($categoria)
        ];

        return view('lacteos.categoria', $data);
    }

    private function getProductosPorCategoria($categoria)
    {
        $productos = [
            'leche_entera' => [
                ['marca' => 'Colun', 'precio' => 1200, 'imagen' => 'leche_entera_colun.jpg'],
                ['marca' => 'Soprole', 'precio' => 1250, 'imagen' => 'leche_entera_soprole.jpg'],
                ['marca' => 'Loncoleche', 'precio' => 1150, 'imagen' => 'leche_entera_loncoleche.jpg'],
            ],
            'leche_descremada' => [
                ['marca' => 'Colun', 'precio' => 1200, 'imagen' => 'leche_descremada_colun.jpg'],
                ['marca' => 'Soprole', 'precio' => 1250, 'imagen' => 'leche_descremada_soprole.jpg'],
                ['marca' => 'Loncoleche', 'precio' => 1150, 'imagen' => 'leche_descremada_loncoleche.jpg'],
            ],
            'leche_semidescremada' => [
                ['marca' => 'Colun', 'precio' => 1200, 'imagen' => 'leche_semidescremada_colun.jpg'],
                ['marca' => 'Soprole', 'precio' => 1250, 'imagen' => 'leche_semidescremada_soprole.jpg'],
                ['marca' => 'Loncoleche', 'precio' => 1150, 'imagen' => 'leche_semidescremada_loncoleche.jpg'],
            ],
            'yogur' => [
                ['marca' => 'Colun', 'precio' => 500, 'imagen' => 'yogur_colun.jpg'],
                ['marca' => 'Soprole', 'precio' => 550, 'imagen' => 'yogur_soprole.jpg'],
                ['marca' => 'Nestlé', 'precio' => 600, 'imagen' => 'yogur_nestle.jpg'],
            ],
            'queso' => [
                ['marca' => 'Queso fresco - Colun', 'precio' => 5500, 'imagen' => 'queso_fresco_colun.jpg'],
                ['marca' => 'Queso fresco - Soprole', 'precio' => 6000, 'imagen' => 'queso_fresco_soprole.jpg'],
                ['marca' => 'Queso mantecoso - Colun', 'precio' => 6500, 'imagen' => 'queso_mantecoso_colun.jpg'],
                ['marca' => 'Queso mantecoso - Soprole', 'precio' => 7000, 'imagen' => 'queso_mantecoso_soprole.jpg'],
                ['marca' => 'Queso gauda - Colun', 'precio' => 7500, 'imagen' => 'queso_gauda_colun.jpg'],
                ['marca' => 'Queso gauda - Soprole', 'precio' => 8000, 'imagen' => 'queso_gauda_soprole.jpg'],
                ['marca' => 'Queso chanco - Colun', 'precio' => 6800, 'imagen' => 'queso_chanco_colun.jpg'],
                ['marca' => 'Queso chanco - Soprole', 'precio' => 7300, 'imagen' => 'queso_chanco_soprole.jpg'],
            ],
            'mantequilla' => [
                ['marca' => 'Colun', 'precio' => 1800, 'imagen' => 'mantequilla_colun.jpg'],
                ['marca' => 'Soprole', 'precio' => 1900, 'imagen' => 'mantequilla_soprole.jpg'],
                ['marca' => 'Los Alpes', 'precio' => 1850, 'imagen' => 'mantequilla_losalpes.jpg'],
            ],
            'crema' => [
                ['marca' => 'Colun', 'precio' => 900, 'imagen' => 'crema_colun.jpg'],
                ['marca' => 'Soprole', 'precio' => 950, 'imagen' => 'crema_soprole.jpg'],
                ['marca' => 'Nestlé', 'precio' => 1000, 'imagen' => 'crema_nestle.jpg'],
            ],
            'quesillo' => [
                ['marca' => 'Colun', 'precio' => 1600, 'imagen' => 'quesillo_colun.jpg'],
                ['marca' => 'Soprole', 'precio' => 1700, 'imagen' => 'quesillo_soprole.jpg'],
            ],
            'leche_condensada' => [
                ['marca' => 'Nestlé', 'precio' => 1200, 'imagen' => 'leche_condensada_nestle.jpg'],
                ['marca' => 'Ideal', 'precio' => 1150, 'imagen' => 'leche_condensada_ideal.jpg'],
            ],
            'leche_evaporada' => [
                ['marca' => 'Nestlé', 'precio' => 1100, 'imagen' => 'leche_evaporada_nestle.jpg'],
                ['marca' => 'Ideal', 'precio' => 1050, 'imagen' => 'leche_evaporada_ideal.jpg'],
            ],
            'queso_rallado' => [
                ['marca' => 'Soprole', 'precio' => 1500, 'imagen' => 'queso_rallado_soprole.jpg'],
                ['marca' => 'Colun', 'precio' => 1450, 'imagen' => 'queso_rallado_colun.jpg'],
            ],
            'postres_lacteos' => [
                ['marca' => 'Flan - Soprole', 'precio' => 600, 'imagen' => 'flan_soprole.jpg'],
                ['marca' => 'Flan - Nestlé', 'precio' => 650, 'imagen' => 'flan_nestle.jpg'],
                ['marca' => 'Manjarate - Soprole', 'precio' => 700, 'imagen' => 'manjarate_soprole.jpg'],
                ['marca' => 'Leche Asada - Soprole', 'precio' => 650, 'imagen' => 'leche_asada_soprole.jpg'],
            ],
            'manjar' => [
                ['marca' => 'Colun', 'precio' => 2000, 'imagen' => 'manjar_colun.jpg'],
                ['marca' => 'Soprole', 'precio' => 2100, 'imagen' => 'manjar_soprole.jpg'],
                ['marca' => 'Nestlé', 'precio' => 2200, 'imagen' => 'manjar_nestle.jpg'],
            ],
        ];

        return $productos[$categoria] ?? [];
    }
}
