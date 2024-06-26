<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        // Crear un usuario administrador
        User::create([
            'name' => 'User',
            'email' => 'admin@example.com',
            'password' => 'password', // No encriptado
            'role' => 'admin',
        ]);

        // Crear un usuario normal
        User::create([
            'name' => 'Normal User',
            'email' => 'user@example.com',
            'password' => 'password', // No encriptado
            'role' => 'user',
        ]);
    }
}
