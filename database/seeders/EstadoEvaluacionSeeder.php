<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\EstadoEvaluacion;


class EstadoEvaluacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('tipo_monitoreos')->exists()) {
            DB::table('tipo_monitoreos')->truncate();
        }

        EstadoEvaluacion::create([
            'id' => 1,
            'descripcion' => 'Evaluado'
        ]);

        EstadoEvaluacion::create([
            'id' => 2,
            'descripcion' => 'Pendiente'
        ]);

        EstadoEvaluacion::create([
            'id' => 3,
            'descripcion' => 'Re Evaluado'
        ]);

        EstadoEvaluacion::create([
            'id' => 4,
            'descripcion' => 'Refutado'
        ]);
    }
}
