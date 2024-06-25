<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@mini.com',
            'password' => Hash::make('Diego'), // Cambia 'password' por la contraseña que desees
        ]);
    }
}
