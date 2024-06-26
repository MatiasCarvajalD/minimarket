<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cecina;

class CecinasTableSeeder extends Seeder
{
    public function run()
    {
        $cecinas = [
            ['nombre' => 'Jamón Cocido', 'marca' => 'San Jorge', 'precio' => 3500, 'imagen' => 'jamon_cocido.jpg', 'peso' => 250],
            ['nombre' => 'Jamón de Pavo', 'marca' => 'San Jorge', 'precio' => 3800, 'imagen' => 'jamon_pavo.jpg', 'peso' => 250],
            ['nombre' => 'Mortadela', 'marca' => 'Winter', 'precio' => 1800, 'imagen' => 'mortadela.jpg', 'peso' => 250],
            ['nombre' => 'Salame', 'marca' => 'Winter', 'precio' => 4200, 'imagen' => 'salame.jpg', 'peso' => 250],
            ['nombre' => 'Salchichón', 'marca' => 'Winter', 'precio' => 3500, 'imagen' => 'salchichon.jpg', 'peso' => 250],
            ['nombre' => 'Chorizo', 'marca' => 'San Jorge', 'precio' => 3000, 'imagen' => 'chorizo.jpg', 'peso' => 250],
            ['nombre' => 'Longaniza', 'marca' => 'Cecinas Llanquihue', 'precio' => 2800, 'imagen' => 'longaniza.jpg', 'peso' => 250],
            ['nombre' => 'Vienesas', 'marca' => 'San Jorge', 'precio' => 2500, 'imagen' => 'vienesas.jpg', 'peso' => 250],
            ['nombre' => 'Paté', 'marca' => 'Winter', 'precio' => 1500, 'imagen' => 'pate.jpg', 'peso' => 150],
            ['nombre' => 'Lomo Canadiense', 'marca' => 'Cecinas Llanquihue', 'precio' => 4500, 'imagen' => 'lomo_canadiense.jpg', 'peso' => 250],
            ['nombre' => 'Cecina Ahumada', 'marca' => 'Cecinas Llanquihue', 'precio' => 4000, 'imagen' => 'cecina_ahumada.jpg', 'peso' => 250],
            ['nombre' => 'Costillar Ahumado', 'marca' => 'Cecinas Llanquihue', 'precio' => 5000, 'imagen' => 'costillar_ahumado.jpg', 'peso' => 500],
        ];

        foreach ($cecinas as $cecinasItem) {
            Cecina::create($cecinasItem);
        }
    }
}