<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    public function run()
    {
        DB::table('usuarios')->insert([
            [
                'rut_usuario' => 12345678,
                'password' => bcrypt('password123'),
                'nombre_usuario' => 'Admin',
                'telefono' => '987654321',
                'direccion' => 'Calle Principal 123',
                'correo' => 'admin@example.com',
                'rol' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'rut_usuario' => 87654321,
                'password' => bcrypt('password456'), 
                'nombre_usuario' => 'Usuario1',
                'telefono' => '987654322',
                'direccion' => 'Calle Secundaria 456',
                'correo' => 'usuario1@example.com',
                'rol' => 'usuario',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'rut_usuario' => 0,
                'password' => bcrypt('invitado'),
                'nombre_usuario' => 'Invitado',
                'telefono' => null,
                'direccion' => null,
                'correo' => 'invitado@example.com',
                'rol' => 'invitado',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

