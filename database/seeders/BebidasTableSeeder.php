<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bebida;

class BebidasTableSeeder extends Seeder
{

    public function run()

    {
        
        Bebida::create(['nombre' => 'Coca-Cola', 'litros' => '500 ml', 'precio' => 900, 'imagen' => 'Coca-Cola (500 ml).jpg']);
        Bebida::create(['nombre' => 'Coca-Cola', 'litros' => '1 litro', 'precio' => 1200, 'imagen' => 'Coca-Cola (1 litro).jpg']);
        Bebida::create(['nombre' => 'Coca-Cola', 'litros' => '1.5 litros', 'precio' => 1500, 'imagen' => 'Coca-Cola (1.5 litros).jpg']);
        Bebida::create(['nombre' => 'Coca-Cola', 'litros' => '3 litros', 'precio' => 2500, 'imagen' => 'Coca-Cola (3 litros).jpg']);
        
        Bebida::create(['nombre' => 'Pepsi', 'litros' => '600 ml', 'precio' => 850, 'imagen' => 'Pepsi (600 ml).jpg']);
        Bebida::create(['nombre' => 'Pepsi', 'litros' => '1.5 litros', 'precio' => 1400, 'imagen' => 'Pepsi (1500 ml).jpg']);
        Bebida::create(['nombre' => 'Pepsi', 'litros' => '3 litros', 'precio' => 2400, 'imagen' => 'Pepsi (3 litros).jpg']);
        
        Bebida::create(['nombre' => 'Fanta', 'litros' => '500 ml', 'precio' => 900, 'imagen' => 'Fanta (500 ml).jpg']);
        Bebida::create(['nombre' => 'Fanta', 'litros' => '1.5 litros', 'precio' => 1500, 'imagen' => 'Fanta (1.5 litros).jpg']);
        Bebida::create(['nombre' => 'Fanta', 'litros' => '3 litros', 'precio' => 2500, 'imagen' => 'Fanta (3 litros).jpg']);
        
        Bebida::create(['nombre' => 'Sprite', 'litros' => '500 ml', 'precio' => 900, 'imagen' => 'sprite.jpg']);
        Bebida::create(['nombre' => 'Sprite', 'litros' => '1 litro', 'precio' => 1200, 'imagen' => 'sprite.jpg']);
        Bebida::create(['nombre' => 'Sprite', 'litros' => '1.5 litros', 'precio' => 1500, 'imagen' => 'sprite.jpg']);
        Bebida::create(['nombre' => 'Sprite', 'litros' => '3 litros', 'precio' => 2500, 'imagen' => 'sprite.jpg']);
        
        Bebida::create(['nombre' => 'Bebida energética Red Bull', 'litros' => '250 ml', 'precio' => 2000, 'imagen' => 'Bebida energética Red Bull (250 ml).jpg']);
        Bebida::create(['nombre' => 'Bebida energética Red Bull', 'litros' => '355 ml', 'precio' => 2800, 'imagen' => 'Bebida energética Red Bull (355 ml).jpg']);
        
        Bebida::create(['nombre' => 'Bebida energética Monster', 'litros' => '473 ml', 'precio' => 2300, 'imagen' => 'Bebida energética Monster (473 ml).jpg']);
        Bebida::create(['nombre' => 'Bebida energética Monster', 'litros' => '710 ml', 'precio' => 3000, 'imagen' => 'mBebida energética Monster (710 ml).jpg']);
        
        Bebida::create(['nombre' => 'Bebida energética Score Gorilla', 'litros' => '600 ml', 'precio' => 1800, 'imagen' => 'Bebida energética Score Gorilla (500 ml).jpg']);
        
        Bebida::create(['nombre' => 'Agua mineral Cachantún', 'litros' => '500 ml', 'precio' => 700, 'imagen' => 'Agua mineral Cachantún (500 ml).jpg']);
        Bebida::create(['nombre' => 'Agua mineral Cachantún', 'litros' => '1 litro', 'precio' => 900, 'imagen' => 'Agua mineral Cachantún (1.5 litros).jpg']);
        Bebida::create(['nombre' => 'Agua mineral Cachantún', 'litros' => '1.5 litros', 'precio' => 1000, 'imagen' => 'Agua mineral Cachantún (2 litros).jpg']);
        Bebida::create(['nombre' => 'Agua mineral Cachantún', 'litros' => '2.5 litros', 'precio' => 1200, 'imagen' => 'Agua mineral Cachantún (2.5 litros).jpg']);
        
        Bebida::create(['nombre' => 'Agua mineral Vital', 'litros' => '600 ml', 'precio' => 650, 'imagen' => 'Agua mineral Vital (600 ml).jpg']);
        Bebida::create(['nombre' => 'Agua mineral Vital', 'litros' => '990 ml', 'precio' => 850, 'imagen' => 'Agua mineral Vital (990 ml)l.jpg']);
        Bebida::create(['nombre' => 'Agua mineral Vital', 'litros' => '1.5 litros', 'precio' => 900, 'imagen' => 'Agua mineral Vital (1.5 litros).jpg']);
        
        Bebida::create(['nombre' => 'Jugos Watts', 'litros' => '200 ml', 'precio' => 500, 'imagen' => 'Jugos Watts (200 ml).jpg']);
        Bebida::create(['nombre' => 'Jugos Watts', 'litros' => '1 litro', 'precio' => 1200, 'imagen' => 'Jugos Watts (1 litro).jpg']);
        
        Bebida::create(['nombre' => 'Jugos Andina', 'litros' => '200 ml', 'precio' => 450, 'imagen' => 'Jugos Andina (200 ml).jpg']);
        Bebida::create(['nombre' => 'Jugos Andina', 'litros' => '600 ml', 'precio' => 850, 'imagen' => 'Jugos Andina (600 ml).jpg']);
        Bebida::create(['nombre' => 'Jugos Andina', 'litros' => '1 litro', 'precio' => 1100, 'imagen' => 'Jugos Andina (1 litro).jpg']);
        
        Bebida::create(['nombre' => 'Té helado Lipton', 'litros' => '400 ml', 'precio' => 900, 'imagen' => 'Té helado Lipton (400 ml).jpg']);
        Bebida::create(['nombre' => 'Té helado Lipton', 'litros' => '1.5 litros', 'precio' => 1500, 'imagen' => 'Té helado Lipton (1.5 litro).jpg']);
        
        Bebida::create(['nombre' => 'Bebida de soya Ades', 'litros' => '200 ml', 'precio' => 600, 'imagen' => 'Bebida de soya Ades (200 ml).jpg']);
        Bebida::create(['nombre' => 'Bebida de soya Ades', 'litros' => '1 litro', 'precio' => 1600, 'imagen' => 'Bebida de soya Ades (1 litro).jpg']);
        
        Bebida::create(['nombre' => 'Bebida isotónica Gatorade', 'litros' => '500 ml', 'precio' => 1200, 'imagen' => 'Bebida isotónica Gatorade (500 ml).jpg']);
        Bebida::create(['nombre' => 'Bebida isotónica Gatorade', 'litros' => '1 litro', 'precio' => 2000, 'imagen' => 'Bebida isotónica Gatorade (1 litro).jpg']);
        
        Bebida::create(['nombre' => 'Bebida isotónica Powerade', 'litros' => '600 ml', 'precio' => 1100, 'imagen' => 'Bebida isotónica Powerade (600 ml).jpg']);
        Bebida::create(['nombre' => 'Bebida isotónica Powerade', 'litros' => '1.1 litro', 'precio' => 1800, 'imagen' => 'Bebida isotónica Powerade (1.1 litro).jpg']);
    }

}