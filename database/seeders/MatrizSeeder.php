<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Matriz;
use App\Enums\Canales;

class MatrizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('matrizs')->exists()) {
            DB::table('matrizs')->truncate();
        }

        Matriz::create([
            'id' => 1,
            'descripcion' => 'Atención psicosocial',
            'canal_id' => Canales::Telefonico->value
        ]);

        Matriz::create([
            'id' => 2,
            'descripcion' => 'Contacto inicial',
            'canal_id' => Canales::Telefonico->value
        ]);

        Matriz::create([
            'id' => 3,
            'descripcion' => 'Contacto inicial',
            'canal_id' => Canales::Whatsapp->value
        ]);

        Matriz::create([
            'id' => 4,
            'descripcion' => 'Atención psicosocial',
            'canal_id' => Canales::Whatsapp->value
        ]);
    }
}
