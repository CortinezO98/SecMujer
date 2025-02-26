<?php

namespace Database\Seeders;

use App\Models\Atributo;
use App\Enums\Matrices;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AtributoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('atributos')->exists()) {
            DB::table('atributos')->truncate();
        }
        
        Atributo::create([
            'id' => 1,
            'descripcion' => 'Errores No Críticos',
            'peso' => 100,
            'matriz_id' => Matrices::ContactoInicialWhatsapp->value
        ]);

        Atributo::create([
            'id' => 2,
            'descripcion' => 'Errores Críticos de Negocio',
            'peso' => 34,
            'matriz_id' => Matrices::ContactoInicialWhatsapp->value
        ]);

        Atributo::create([
            'id' => 3,
            'descripcion' => 'Errores Críticos de Usuario Final',
            'peso' => 66,
            'matriz_id' => Matrices::ContactoInicialWhatsapp->value
        ]);



        Atributo::create([
            'id' => 4,
            'descripcion' => 'Errores No Críticos',
            'peso' => 100,
            'matriz_id' => Matrices::AtencionPsicosocialWhatsapp->value
        ]);

        Atributo::create([
            'id' => 5,
            'descripcion' => 'Errores Críticos de Negocio',
            'peso' => 64,
            'matriz_id' => Matrices::AtencionPsicosocialWhatsapp->value
        ]);

        Atributo::create([
            'id' => 6,
            'descripcion' => 'Errores Críticos de Usuario Final',
            'peso' => 36,
            'matriz_id' => Matrices::AtencionPsicosocialWhatsapp->value
        ]);





        Atributo::create([
            'id' => 7,
            'descripcion' => 'Errores No Críticos',
            'peso' => 100,
            'matriz_id' => Matrices::ContactoInicialTelefonico->value
        ]);

        Atributo::create([
            'id' => 8,
            'descripcion' => 'Errores Críticos de Negocio',
            'peso' => 46,
            'matriz_id' => Matrices::ContactoInicialTelefonico->value
        ]);

        Atributo::create([
            'id' => 9,
            'descripcion' => 'Errores Críticos de Usuario Final',
            'peso' => 54,
            'matriz_id' => Matrices::ContactoInicialTelefonico->value
        ]);




        Atributo::create([
            'id' => 10,
            'descripcion' => 'Errores No Críticos',
            'peso' => 100,
            'matriz_id' => Matrices::AtencionPsicosocialTelefonico->value
        ]);

        Atributo::create([
            'id' => 11,
            'descripcion' => 'Errores Críticos',
            'peso' => 100,
            'matriz_id' => Matrices::AtencionPsicosocialTelefonico->value
        ]);
    }
}
