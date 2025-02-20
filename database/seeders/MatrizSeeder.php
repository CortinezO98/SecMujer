<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Matriz;
use App\Enums\Canales;
use App\Enums\Matrices;

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
            'id' => Matrices::AtencionPsicosocialTelefonico->value,
            'descripcion' => 'Atención psicosocial',
            'canal_id' => Canales::Telefonico->value
        ]);

        Matriz::create([
            'id' => Matrices::ContactoInicialTelefonico->value,
            'descripcion' => 'Contacto inicial',
            'canal_id' => Canales::Telefonico->value
        ]);

        Matriz::create([
            'id' => Matrices::AtencionPsicosocialWhatsapp->value,
            'descripcion' => 'Atención psicosocial',
            'canal_id' => Canales::Whatsapp->value
        ]);

        Matriz::create([
            'id' => Matrices::ContactoInicialWhatsapp->value,
            'descripcion' => 'Contacto inicial',
            'canal_id' => Canales::Whatsapp->value
        ]);
    }
}
