<?php

namespace Database\Seeders;

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
            AtributoSeeder::class,
            ItemSeeder::class,
            SubItemSeeder::class,
            // EvaluacionSeeder::class,
            // EvaluacionAtributoSeeder::class,
            // EvaluacionSubItemSeeder::class,
        ]);
    }
}
