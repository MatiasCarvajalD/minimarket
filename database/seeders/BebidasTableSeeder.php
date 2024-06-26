<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bebida;

class BebidasTableSeeder extends Seeder
{
    public function run()
    {
        Bebida::create(['nombre' => 'Coca-Cola', 'litros' => '500 ml', 'precio' => 900, 'imagen' => 'coca_cola.jpg']);
        Bebida::create(['nombre' => 'Coca-Cola', 'litros' => '1 litro', 'precio' => 1200, 'imagen' => 'coca_cola.jpg']);
        Bebida::create(['nombre' => 'Coca-Cola', 'litros' => '1.5 litros', 'precio' => 1500, 'imagen' => 'coca_cola.jpg']);
        Bebida::create(['nombre' => 'Coca-Cola', 'litros' => '3 litros', 'precio' => 2500, 'imagen' => 'coca_cola.jpg']);
        
        Bebida::create(['nombre' => 'Pepsi', 'litros' => '500 ml', 'precio' => 850, 'imagen' => 'pepsi.jpg']);
        Bebida::create(['nombre' => 'Pepsi', 'litros' => '1 litro', 'precio' => 1100, 'imagen' => 'pepsi.jpg']);
        Bebida::create(['nombre' => 'Pepsi', 'litros' => '1.5 litros', 'precio' => 1400, 'imagen' => 'pepsi.jpg']);
        Bebida::create(['nombre' => 'Pepsi', 'litros' => '3 litros', 'precio' => 2400, 'imagen' => 'pepsi.jpg']);
        
        Bebida::create(['nombre' => 'Fanta', 'litros' => '500 ml', 'precio' => 900, 'imagen' => 'fanta.jpg']);
        Bebida::create(['nombre' => 'Fanta', 'litros' => '1 litro', 'precio' => 1200, 'imagen' => 'fanta.jpg']);
        Bebida::create(['nombre' => 'Fanta', 'litros' => '1.5 litros', 'precio' => 1500, 'imagen' => 'fanta.jpg']);
        Bebida::create(['nombre' => 'Fanta', 'litros' => '3 litros', 'precio' => 2500, 'imagen' => 'fanta.jpg']);
        
        Bebida::create(['nombre' => 'Sprite', 'litros' => '500 ml', 'precio' => 900, 'imagen' => 'sprite.jpg']);
        Bebida::create(['nombre' => 'Sprite', 'litros' => '1 litro', 'precio' => 1200, 'imagen' => 'sprite.jpg']);
        Bebida::create(['nombre' => 'Sprite', 'litros' => '1.5 litros', 'precio' => 1500, 'imagen' => 'sprite.jpg']);
        Bebida::create(['nombre' => 'Sprite', 'litros' => '3 litros', 'precio' => 2500, 'imagen' => 'sprite.jpg']);
        
        Bebida::create(['nombre' => 'Bebida energética Red Bull', 'litros' => '250 ml', 'precio' => 2000, 'imagen' => 'red_bull.jpg']);
        Bebida::create(['nombre' => 'Bebida energética Red Bull', 'litros' => '355 ml', 'precio' => 2800, 'imagen' => 'red_bull.jpg']);
        
        Bebida::create(['nombre' => 'Bebida energética Monster', 'litros' => '473 ml', 'precio' => 2300, 'imagen' => 'monster.jpg']);
        Bebida::create(['nombre' => 'Bebida energética Monster', 'litros' => '710 ml', 'precio' => 3000, 'imagen' => 'monster.jpg']);
        
        Bebida::create(['nombre' => 'Bebida energética Vía', 'litros' => '250 ml', 'precio' => 1500, 'imagen' => 'via.jpg']);
        Bebida::create(['nombre' => 'Bebida energética Vía', 'litros' => '500 ml', 'precio' => 1800, 'imagen' => 'via.jpg']);
        
        Bebida::create(['nombre' => 'Agua mineral Cachantún', 'litros' => '500 ml', 'precio' => 700, 'imagen' => 'cachantun.jpg']);
        Bebida::create(['nombre' => 'Agua mineral Cachantún', 'litros' => '1 litro', 'precio' => 900, 'imagen' => 'cachantun.jpg']);
        Bebida::create(['nombre' => 'Agua mineral Cachantún', 'litros' => '1.5 litros', 'precio' => 1000, 'imagen' => 'cachantun.jpg']);
        Bebida::create(['nombre' => 'Agua mineral Cachantún', 'litros' => '2 litros', 'precio' => 1200, 'imagen' => 'cachantun.jpg']);
        
        Bebida::create(['nombre' => 'Agua mineral Vital', 'litros' => '500 ml', 'precio' => 650, 'imagen' => 'vital.jpg']);
        Bebida::create(['nombre' => 'Agua mineral Vital', 'litros' => '1 litro', 'precio' => 850, 'imagen' => 'vital.jpg']);
        Bebida::create(['nombre' => 'Agua mineral Vital', 'litros' => '1.5 litros', 'precio' => 900, 'imagen' => 'vital.jpg']);
        Bebida::create(['nombre' => 'Agua mineral Vital', 'litros' => '2 litros', 'precio' => 1100, 'imagen' => 'vital.jpg']);
        
        Bebida::create(['nombre' => 'Jugos Watts', 'litros' => '200 ml', 'precio' => 500, 'imagen' => 'watts.jpg']);
        Bebida::create(['nombre' => 'Jugos Watts', 'litros' => '500 ml', 'precio' => 900, 'imagen' => 'watts.jpg']);
        Bebida::create(['nombre' => 'Jugos Watts', 'litros' => '1 litro', 'precio' => 1200, 'imagen' => 'watts.jpg']);
        
        Bebida::create(['nombre' => 'Jugos Andina', 'litros' => '200 ml', 'precio' => 450, 'imagen' => 'andina.jpg']);
        Bebida::create(['nombre' => 'Jugos Andina', 'litros' => '500 ml', 'precio' => 850, 'imagen' => 'andina.jpg']);
        Bebida::create(['nombre' => 'Jugos Andina', 'litros' => '1 litro', 'precio' => 1100, 'imagen' => 'andina.jpg']);
        
        Bebida::create(['nombre' => 'Néctar de fruta Vivo', 'litros' => '200 ml', 'precio' => 550, 'imagen' => 'vivo.jpg']);
        Bebida::create(['nombre' => 'Néctar de fruta Vivo', 'litros' => '500 ml', 'precio' => 1000, 'imagen' => 'vivo.jpg']);
        Bebida::create(['nombre' => 'Néctar de fruta Vivo', 'litros' => '1 litro', 'precio' => 1300, 'imagen' => 'vivo.jpg']);
        
        Bebida::create(['nombre' => 'Té helado Lipton', 'litros' => '500 ml', 'precio' => 900, 'imagen' => 'lipton.jpg']);
        Bebida::create(['nombre' => 'Té helado Lipton', 'litros' => '1 litro', 'precio' => 1200, 'imagen' => 'lipton.jpg']);
        Bebida::create(['nombre' => 'Té helado Lipton', 'litros' => '1.5 litros', 'precio' => 1500, 'imagen' => 'lipton.jpg']);
        
        Bebida::create(['nombre' => 'Bebida de soya Ades', 'litros' => '200 ml', 'precio' => 600, 'imagen' => 'ades.jpg']);
        Bebida::create(['nombre' => 'Bebida de soya Ades', 'litros' => '500 ml', 'precio' => 1200, 'imagen' => 'ades.jpg']);
        Bebida::create(['nombre' => 'Bebida de soya Ades', 'litros' => '1 litro', 'precio' => 1600, 'imagen' => 'ades.jpg']);
        
        Bebida::create(['nombre' => 'Bebida isotónica Gatorade', 'litros' => '500 ml', 'precio' => 1200, 'imagen' => 'gatorade.jpg']);
        Bebida::create(['nombre' => 'Bebida isotónica Gatorade', 'litros' => '1 litro', 'precio' => 2000, 'imagen' => 'gatorade.jpg']);
        
        Bebida::create(['nombre' => 'Bebida isotónica Powerade', 'litros' => '500 ml', 'precio' => 1100, 'imagen' => 'powerade.jpg']);
        Bebida::create(['nombre' => 'Bebida isotónica Powerade', 'litros' => '1 litro', 'precio' => 1800, 'imagen' => 'powerade.jpg']);
    }
}
