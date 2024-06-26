<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    public function run()
    {
        Producto::create(['nombre' => 'Coca-Cola', 'precio' => 1500, 'imagen' => 'coca_cola.jpg', 'destacado' => true]);
        Producto::create(['nombre' => 'Pepsi', 'precio' => 1400, 'imagen' => 'pepsi.jpg', 'destacado' => true]);
        Producto::create([
            'nombre' => 'Leche Entera Colun',
            'precio' => 1200,
            'imagen' => 'leche_entera_colun.jpg',
            'destacado' => true,
        ]);

        Producto::create([
            'nombre' => 'Yogur Natural Colun',
            'precio' => 800,
            'imagen' => 'yogur_natural_colun.jpg',
            'destacado' => true,
        ]);
        // Agrega más productos según sea necesario
    }
}
