<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatosFiscalesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('datos_fiscales')->insert([
            ['id_usuario' => 1, 'rfc' => 'RFC001', 'direccion_fiscal' => 'Direccion Fiscal 1', 'beneficiarios' => 'Beneficiario1'],
            ['id_usuario' => 2, 'rfc' => 'RFC002', 'direccion_fiscal' => 'Direccion Fiscal 2', 'beneficiarios' => 'Beneficiario2'],
            
        ]);
    }
}
