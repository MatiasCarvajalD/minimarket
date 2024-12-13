<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    public function run()
    {
        DB::table('productos')->insert([
            // Productos Minimarket
            ['nom_producto' => 'Coca-Cola', 'marca' => 'Coca-Cola', 'descripcion' => 'Bebida gaseosa 1.5L', 'precio' => 1500, 'stock_actual' => 50, 'stock_critico' => 10, 'id_categoria' => 1, 'imagen' => 'images/Coca-Cola.jpg'],
            ['nom_producto' => 'Leche Entera', 'marca' => 'Colun', 'descripcion' => 'Leche fresca 1L', 'precio' => 1000, 'stock_actual' => 30, 'stock_critico' => 5, 'id_categoria' => 2, 'imagen' => 'images/Leche Entera.jpg'],
            ['nom_producto' => 'Jamón Cocido', 'marca' => 'San Jorge', 'descripcion' => 'Jamón de alta calidad', 'precio' => 3000, 'stock_actual' => 20, 'stock_critico' => 3, 'id_categoria' => 3, 'imagen' => 'images/Jamón Cocido.jpg'],
            ['nom_producto' => 'Pan Francés', 'marca' => 'Artesanal', 'descripcion' => 'Pan fresco del día', 'precio' => 500, 'stock_actual' => 100, 'stock_critico' => 20, 'id_categoria' => 4, 'imagen' => 'images/Pan Francés.jpg'],
            ['nom_producto' => 'Galletas de Chocolate', 'marca' => 'Costa', 'descripcion' => 'Galletas con chips de chocolate', 'precio' => 2000, 'stock_actual' => 40, 'stock_critico' => 5, 'id_categoria' => 5, 'imagen' => 'images/Galletas de Chocolate.jpg'],
            ['nom_producto' => 'Papas Lays', 'marca' => 'Lays', 'descripcion' => 'Papas fritas clásicas', 'precio' => 1000, 'stock_actual' => 40, 'stock_critico' => 5, 'id_categoria' => 6, 'imagen' => 'images/Papas Lays.jpg'],
            ['nom_producto' => 'Detergente Ariel', 'marca' => 'Ariel', 'descripcion' => 'Detergente para ropa', 'precio' => 4500, 'stock_actual' => 20, 'stock_critico' => 2, 'id_categoria' => 7, 'imagen' => 'images/Detergente Ariel.jpg'],

            // Productos Restaurante
            ['nom_producto' => 'Empanadas de Pino', 'marca' => 'Artesanal', 'descripcion' => 'Empanadas rellenas con carne y cebolla', 'precio' => 1500, 'stock_actual' => 50, 'stock_critico' => 5, 'id_categoria' => 8, 'imagen' => 'images/Empanadas de Pino.jpg'],
            ['nom_producto' => 'Lomo a lo Pobre', 'marca' => 'Especial', 'descripcion' => 'Lomo con papas fritas, huevo y cebolla', 'precio' => 8000, 'stock_actual' => 10, 'stock_critico' => 3, 'id_categoria' => 9, 'imagen' => 'images/Lomo a lo Pobre.jpg'],
            ['nom_producto' => 'Mote con Huesillo', 'marca' => 'Tradicional', 'descripcion' => 'Trigo mote con jugo de huesillos', 'precio' => 2000, 'stock_actual' => 30, 'stock_critico' => 5, 'id_categoria' => 10, 'imagen' => 'images/Mote con Huesillo.jpg'],
            ['nom_producto' => 'Churrasco Italiano', 'marca' => 'Artesanal', 'descripcion' => 'Carne de res, tomate, palta y mayo', 'precio' => 4500, 'stock_actual' => 15, 'stock_critico' => 3, 'id_categoria' => 11, 'imagen' => 'images/Churrasco Italiano.png'],
            ['nom_producto' => 'Papas Fritas Familiar', 'marca' => 'Especial', 'descripcion' => 'Porción para compartir', 'precio' => 4500, 'stock_actual' => 20, 'stock_critico' => 5, 'id_categoria' => 12, 'imagen' => 'images/Papas Fritas Familiar.jpg'],
            ['nom_producto' => 'Jugo Natural', 'marca' => 'NaturalCo', 'descripcion' => 'Jugo de frutas frescas', 'precio' => 2500, 'stock_actual' => 25, 'stock_critico' => 5, 'id_categoria' => 13, 'imagen' => 'images/Jugo Natural.jpg'],
            ['nom_producto' => 'Pisco Sour', 'marca' => 'Tradicional', 'descripcion' => 'Pisco con limón y azúcar', 'precio' => 4000, 'stock_actual' => 25, 'stock_critico' => 5, 'id_categoria' => 14, 'imagen' => 'images/Pisco Sour.jpg'],
        ]);
    }
}
