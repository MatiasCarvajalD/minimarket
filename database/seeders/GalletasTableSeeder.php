<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Galleta;

class GalletasTableSeeder extends Seeder
{
    public function run()
    {
        $galletas = [
            ['nombre' => 'Galletas Trencito', 'marca' => 'Nestlé', 'precio' => 1500, 'peso' => 180, 'imagen' => 'trencito.jpg'],
            ['nombre' => 'Galletas Tritón', 'marca' => 'Costa', 'precio' => 1200, 'peso' => 126, 'imagen' => 'triton.jpg'],
            ['nombre' => 'Galletas Frac', 'marca' => 'Costa', 'precio' => 1300, 'peso' => 150, 'imagen' => 'frac.jpg'],
            ['nombre' => 'Galletas Cerealitas', 'marca' => 'McKay', 'precio' => 1600, 'peso' => 170, 'imagen' => 'cerealitas.jpg'],
            ['nombre' => 'Galletas Macay', 'marca' => 'McKay', 'precio' => 1100, 'peso' => 200, 'imagen' => 'macay.jpg'],
            ['nombre' => 'Galletas Vizzio', 'marca' => 'Costa', 'precio' => 1800, 'peso' => 165, 'imagen' => 'vizzio.jpg'],
            ['nombre' => 'Galletas Selz', 'marca' => 'McKay', 'precio' => 1200, 'peso' => 170, 'imagen' => 'selz.jpg'],
            ['nombre' => 'Galletas Malla', 'marca' => 'McKay', 'precio' => 1400, 'peso' => 180, 'imagen' => 'malla.jpg'],
            ['nombre' => 'Galletas Óreo', 'marca' => 'Nabisco', 'precio' => 1500, 'peso' => 154, 'imagen' => 'oreo.jpg'],
            ['nombre' => 'Galletas Mora Mora', 'marca' => 'Costa', 'precio' => 1300, 'peso' => 160, 'imagen' => 'mora_mora.jpg'],
            ['nombre' => 'Galletas Soda', 'marca' => 'McKay', 'precio' => 1100, 'peso' => 170, 'imagen' => 'soda.jpg'],
            ['nombre' => 'Galletas Frutigran', 'marca' => 'Nestlé', 'precio' => 1600, 'peso' => 190, 'imagen' => 'frutigran.jpg'],
        ];

        foreach ($galletas as $galleta) {
            Galleta::create($galleta);
        }
    }
}
