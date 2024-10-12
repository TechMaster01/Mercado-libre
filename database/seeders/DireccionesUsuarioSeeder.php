<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DireccionesUsuarioSeeder extends Seeder
{
    public function run()
    {
        DB::table('direcciones_usuario')->insert([
            [
                'id_usuario' => 1, // 
                'direccion' => 'Calle Falsa 123',
                'ciudad' => 'Ciudad Falsa',
                'estado' => 'Estado Falso',
                'codigo_postal' => '12345',
            ],
            [
                'id_usuario' => 2, 
                'direccion' => 'Avenida Siempre Viva 742',
                'ciudad' => 'Springfield',
                'estado' => 'Illinois',
                'codigo_postal' => '12345',
            ],
            [
                'id_usuario' => 3, 
                'direccion' => 'Paseo de la Reforma 222',
                'ciudad' => 'Ciudad de México',
                'estado' => 'CDMX',
                'codigo_postal' => '12345',
            ],
        ]);
    }
}
