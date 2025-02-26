<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\TipoMonitoreo;

class TipoMonitoreoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('tipo_monitoreos')->exists()) {
            DB::table('tipo_monitoreos')->truncate();
        }
        
        TipoMonitoreo::create([
            'id' => 1,
            'descripcion' => 'Calibración'
        ]);

        TipoMonitoreo::create([
            'id' => 2,
            'descripcion' => 'Gabración'
        ]);

        TipoMonitoreo::create([
            'id' => 3,
            'descripcion' => 'Remoto'
        ]);

        TipoMonitoreo::create([
            'id' => 4,
            'descripcion' => 'Solicitud del Cliente'
        ]);

        TipoMonitoreo::create([
            'id' => 5,
            'descripcion' => 'Seguimiento Simisional'
        ]);

    }
}
