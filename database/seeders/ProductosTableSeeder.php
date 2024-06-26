<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductosTableSeeder extends Seeder
{
    public function run()
    {
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
