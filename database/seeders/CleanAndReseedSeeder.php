<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CleanAndReseedSeeder extends Seeder
{
    public function run()
    {
        // Desactivar llaves foráneas temporalmente
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Limpiar solamente las tablas que quieres
        DB::table('nivels')->truncate();
        DB::table('sub_items')->truncate();
        DB::table('items')->truncate();
        DB::table('atributos')->truncate();

        // Activar llaves foráneas de nuevo
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Ejecutar los seeders correspondientes
        $this->call([
            AtributoSeeder::class,
            ItemSeeder::class,
            SubItemSeeder::class,
            NivelSeeder::class,
        ]);
    }
}
