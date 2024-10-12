<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerfilUsuarioTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('perfil_usuario')->insert([
            ['id_usuario' => 1, 'nombre_completo' => 'Nombre Completo 1', 'fecha_nacimiento' => '2000-01-01', 'sexo' => 'masculino'],
            ['id_usuario' => 2, 'nombre_completo' => 'Nombre Completo 2', 'fecha_nacimiento' => '1990-02-02', 'sexo' => 'femenino'],
            
        ]);
    }
}
