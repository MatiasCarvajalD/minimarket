<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            BebidasTableSeeder::class,
            CecinasTableSeeder::class,
            GalletasTableSeeder::class,
            LacteosTableSeeder::class,
            PanaderiaTableSeeder::class,
            OtrosTableSeeder::class,
            UserTableSeeder::class // Asegúrate de que el nombre de la clase es correcto
        ]);
    }
}
