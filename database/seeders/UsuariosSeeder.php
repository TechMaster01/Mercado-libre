<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('usuarios')->insert([
            ['nombre_usuario' => 'Usuario1', 'email' => 'usuario1@example.com', 'telefono' => '1234567890', 'contraseña' => bcrypt('password1')],
            ['nombre_usuario' => 'Usuario2', 'email' => 'usuario2@example.com', 'telefono' => '0987654321', 'contraseña' => bcrypt('password2')],
            
        ]);
    }
}
