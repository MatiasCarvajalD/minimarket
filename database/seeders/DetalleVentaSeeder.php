<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetalleVentaSeeder extends Seeder
{
    public function run()
    {
        DB::table('detalle_venta')->insert([
            [
                'id_venta' => 1,
                'cod_producto' => 1,
                'cantidad' => 2,
                'valor_unidad' => 1200,
            ],
            [
                'id_venta' => 1,
                'cod_producto' => 2,
                'cantidad' => 1,
                'valor_unidad' => 1500,
            ],
        ]);
    }
}
