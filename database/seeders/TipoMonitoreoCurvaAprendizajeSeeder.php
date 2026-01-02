<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoMonitoreoCurvaAprendizajeSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tipo_monitoreos')->updateOrInsert(
            ['descripcion' => 'Curva de aprendizaje'],
            ['descripcion' => 'Curva de aprendizaje']
        );
    }
}
