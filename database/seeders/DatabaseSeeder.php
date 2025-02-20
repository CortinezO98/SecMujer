<?php

namespace Database\Seeders;

use App\Models\Atributo;
use App\Models\Evaluacion;
use App\Models\EvaluacionAtributo;
use App\Models\EvaluacionSubItem;
use App\Models\Interaccion;
use App\Models\Item;
use App\Models\SubItem;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(4)->create();

        $this->call([
            UserRolSeeder::class,
            UserSeeder::class,
            CanalSeeder::class,
            MatrizSeeder::class,
            TipoMonitoreoSeeder::class,
            EstadoEvaluacionSeeder::class,
            // Atributo::class,
            // Item::class,
            // SubItem::class,
            // Evaluacion::class,
            // EvaluacionAtributo::class,
            // EvaluacionSubItem::class,
            // Interaccion::class,
        ]);
    }
}
