<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Oferta;

class OfertasTableSeeder extends Seeder
{
    public function run()
    {
        Oferta::create([
            'nombre' => 'Descuento 10% en Bebidas',
            'precio' => 900,
            'imagen' => 'descuento_bebidas.jpg',
        ]);

        Oferta::create([
            'nombre' => '2x1 en Galletas',
            'precio' => 1500,
            'imagen' => '2x1_galletas.jpg',
        ]);

        // Agrega más ofertas según sea necesario
    }
}
