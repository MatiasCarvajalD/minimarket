<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Panaderia;

class PanaderiaTableSeeder extends Seeder
{
    public function run()
    {
        $productos = [
            ['nombre' => 'Marraqueta', 'marca' => '', 'precio' => 300, 'peso' => 100, 'imagen' => 'marraqueta.jpg'],
            ['nombre' => 'Hallulla', 'marca' => '', 'precio' => 250, 'peso' => 100, 'imagen' => 'hallulla.jpg'],
            ['nombre' => 'Pan Amasado', 'marca' => '', 'precio' => 350, 'peso' => 100, 'imagen' => 'pan_amasado.jpg'],
            ['nombre' => 'Pan de Molde', 'marca' => '', 'precio' => 1200, 'peso' => 500, 'imagen' => 'pan_de_molde.jpg'],
            ['nombre' => 'Pan Integral', 'marca' => '', 'precio' => 1500, 'peso' => 500, 'imagen' => 'pan_integral.jpg'],
            ['nombre' => 'Dobladas', 'marca' => '', 'precio' => 500, 'peso' => 100, 'imagen' => 'dobladas.jpg'],
            ['nombre' => 'Churrascas', 'marca' => '', 'precio' => 400, 'peso' => 100, 'imagen' => 'churrascas.jpg'],
            ['nombre' => 'Berlines', 'marca' => '', 'precio' => 500, 'peso' => 100, 'imagen' => 'berlines.jpg'],
            ['nombre' => 'Chilenitos', 'marca' => '', 'precio' => 700, 'peso' => 100, 'imagen' => 'chilenitos.jpg'],
            ['nombre' => 'Empanadas de Pino', 'marca' => '', 'precio' => 1500, 'peso' => 200, 'imagen' => 'empanadas_pino.jpg'],
            ['nombre' => 'Empanadas de Queso', 'marca' => '', 'precio' => 1200, 'peso' => 200, 'imagen' => 'empanadas_queso.jpg'],
            ['nombre' => 'Cuernitos', 'marca' => '', 'precio' => 400, 'peso' => 100, 'imagen' => 'cuernitos.jpg'],
            ['nombre' => 'Queques', 'marca' => '', 'precio' => 2000, 'peso' => 300, 'imagen' => 'queques.jpg'],
            ['nombre' => 'Kuchen', 'marca' => '', 'precio' => 3500, 'peso' => 400, 'imagen' => 'kuchen.jpg'],
            ['nombre' => 'Tartaletas', 'marca' => '', 'precio' => 1000, 'peso' => 100, 'imagen' => 'tartaletas.jpg'],
            ['nombre' => 'Pan de Pascua', 'marca' => '', 'precio' => 3000, 'peso' => 500, 'imagen' => 'pan_de_pascua.jpg'],
            ['nombre' => 'Coliza', 'marca' => '', 'precio' => 600, 'peso' => 100, 'imagen' => 'coliza.jpg'],
            ['nombre' => 'Bollo Dulce', 'marca' => '', 'precio' => 300, 'peso' => 100, 'imagen' => 'bollo_dulce.jpg'],
            ['nombre' => 'Torta de Milhojas', 'marca' => '', 'precio' => 15000, 'peso' => 1000, 'imagen' => 'torta_milhojas.jpg'],
            ['nombre' => 'Brazo de Reina', 'marca' => '', 'precio' => 6000, 'peso' => 500, 'imagen' => 'brazo_reina.jpg'],
        ];

        foreach ($productos as $producto) {
            Panaderia::create($producto);
        }
    }
}
