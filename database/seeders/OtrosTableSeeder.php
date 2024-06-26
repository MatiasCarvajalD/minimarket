<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Otro;

class OtrosTableSeeder extends Seeder
{
    public function run()
    {
        $productos = [
            // Productos Congelados
            ['nombre' => 'Pizza Congelada', 'categoria' => 'Productos Congelados', 'marca' => 'San Jorge', 'precio' => 4500, 'peso' => 400, 'unidad' => 'g', 'imagen' => 'pizza_congelada.jpg'],
            ['nombre' => 'Empanadas Congeladas', 'categoria' => 'Productos Congelados', 'marca' => 'La Preferida', 'precio' => 3800, 'peso' => 4, 'unidad' => 'unidades', 'imagen' => 'empanadas_congeladas.jpg'],
            ['nombre' => 'Verduras Congeladas (Mix de verduras)', 'categoria' => 'Productos Congelados', 'marca' => 'Frutos del Maipo', 'precio' => 2500, 'peso' => 1000, 'unidad' => 'g', 'imagen' => 'verduras_congeladas.jpg'],
            ['nombre' => 'Helado (Bote)', 'categoria' => 'Productos Congelados', 'marca' => 'Savory', 'precio' => 3000, 'peso' => 1000, 'unidad' => 'ml', 'imagen' => 'helado.jpg'],
            ['nombre' => 'Papas Fritas Congeladas', 'categoria' => 'Productos Congelados', 'marca' => 'McCain', 'precio' => 2800, 'peso' => 1000, 'unidad' => 'g', 'imagen' => 'papas_fritas.jpg'],
            // Productos de Higiene Personal
            ['nombre' => 'Jabón (barra)', 'categoria' => 'Productos de Higiene Personal', 'marca' => 'Dove', 'precio' => 1200, 'peso' => 90, 'unidad' => 'g', 'imagen' => 'jabon.jpg'],
            ['nombre' => 'Shampoo', 'categoria' => 'Productos de Higiene Personal', 'marca' => 'Pantene', 'precio' => 4000, 'peso' => 400, 'unidad' => 'ml', 'imagen' => 'shampoo.jpg'],
            ['nombre' => 'Pasta de Dientes', 'categoria' => 'Productos de Higiene Personal', 'marca' => 'Colgate', 'precio' => 2500, 'peso' => 90, 'unidad' => 'g', 'imagen' => 'pasta_dientes.jpg'],
            ['nombre' => 'Desodorante', 'categoria' => 'Productos de Higiene Personal', 'marca' => 'Rexona', 'precio' => 2200, 'peso' => 150, 'unidad' => 'ml', 'imagen' => 'desodorante.jpg'],
            ['nombre' => 'Papel Higiénico', 'categoria' => 'Productos de Higiene Personal', 'marca' => 'Elite', 'precio' => 3500, 'peso' => 12, 'unidad' => 'rollos', 'imagen' => 'papel_higienico.jpg'],
            // Productos de Papelería
            ['nombre' => 'Lápices', 'categoria' => 'Productos de Papelería', 'marca' => 'Bic', 'precio' => 1000, 'peso' => 12, 'unidad' => 'unidades', 'imagen' => 'lapices.jpg'],
            ['nombre' => 'Cuadernos', 'categoria' => 'Productos de Papelería', 'marca' => 'Torre', 'precio' => 2500, 'peso' => 100, 'unidad' => 'hojas', 'imagen' => 'cuadernos.jpg'],
            ['nombre' => 'Papel Higiénico (para oficina)', 'categoria' => 'Productos de Papelería', 'marca' => 'Scott', 'precio' => 1200, 'peso' => 4, 'unidad' => 'rollos', 'imagen' => 'papel_higienico_oficina.jpg'],
            ['nombre' => 'Cinta Adhesiva', 'categoria' => 'Productos de Papelería', 'marca' => 'Scotch', 'precio' => 1500, 'peso' => 1, 'unidad' => 'rollo', 'imagen' => 'cinta_adhesiva.jpg'],
            ['nombre' => 'Gomas de Borrar', 'categoria' => 'Productos de Papelería', 'marca' => 'Milan', 'precio' => 500, 'peso' => 1, 'unidad' => 'unidad', 'imagen' => 'gomas_borrar.jpg'],
            // Productos para Mascotas
            ['nombre' => 'Alimento para Perros', 'categoria' => 'Productos para Mascotas', 'marca' => 'Pedigree', 'precio' => 18000, 'peso' => 10000, 'unidad' => 'g', 'imagen' => 'alimento_perros.jpg'],
            ['nombre' => 'Alimento para Gatos', 'categoria' => 'Productos para Mascotas', 'marca' => 'Whiskas', 'precio' => 16000, 'peso' => 10000, 'unidad' => 'g', 'imagen' => 'alimento_gatos.jpg'],
            ['nombre' => 'Snacks para Perros', 'categoria' => 'Productos para Mascotas', 'marca' => 'Pedigree Dentastix', 'precio' => 3500, 'peso' => 7, 'unidad' => 'unidades', 'imagen' => 'snacks_perros.jpg'],
            ['nombre' => 'Snacks para Gatos', 'categoria' => 'Productos para Mascotas', 'marca' => 'Whiskas Temptations', 'precio' => 2500, 'peso' => 85, 'unidad' => 'g', 'imagen' => 'snacks_gatos.jpg'],
            ['nombre' => 'Arena para Gatos', 'categoria' => 'Productos para Mascotas', 'marca' => 'Sanicat', 'precio' => 5000, 'peso' => 5000, 'unidad' => 'g', 'imagen' => 'arena_gatos.jpg'],
        ];

        foreach ($productos as $producto) {
            Otro::create($producto);
        }
    }
}
