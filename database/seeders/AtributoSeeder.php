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
            'abreviatura_id' => 1,
            'matriz_id' => Matrices::ContactoInicialWhatsapp->value
        ]);

        Atributo::create([
            'id' => 2,
            'descripcion' => 'Errores Críticos de Negocio',
            'peso' => 34,
            'abreviatura_id' => 2,
            'matriz_id' => Matrices::ContactoInicialWhatsapp->value
        ]);

        Atributo::create([
            'id' => 3,
            'descripcion' => 'Errores Críticos de Usuario Final',
            'peso' => 66,
            'abreviatura_id' => 2,
            'matriz_id' => Matrices::ContactoInicialWhatsapp->value
        ]);



        Atributo::create([
            'id' => 4,
            'descripcion' => 'Errores No Críticos',
            'peso' => 100,
            'abreviatura_id' => 1,
            'matriz_id' => Matrices::AtencionPsicosocialWhatsapp->value
        ]);

        Atributo::create([
            'id' => 5,
            'descripcion' => 'Errores Críticos de Negocio',
            'peso' => 64,
            'abreviatura_id' => 2,
            'matriz_id' => Matrices::AtencionPsicosocialWhatsapp->value
        ]);

        Atributo::create([
            'id' => 6,
            'descripcion' => 'Errores Críticos de Usuario Final',
            'peso' => 36,
            'abreviatura_id' => 2,
            'matriz_id' => Matrices::AtencionPsicosocialWhatsapp->value
        ]);




// MATRIZ DE CALIDAD Y CALIBRACIONES PROCESO TELEFONICO CONTACTO INICIAL
        Atributo::create([
            'id' => 7,
            'descripcion' => 'Errores No Críticos',
            'peso' => 100,
            'abreviatura_id' => 1,
            'matriz_id' => Matrices::ContactoInicialTelefonico->value
        ]);

        Atributo::create([
            'id' => 8,
            'descripcion' => 'Errores Críticos de Negocio',
            'peso' => 24.3,
            'abreviatura_id' => 2,
            'matriz_id' => Matrices::ContactoInicialTelefonico->value
        ]);

        Atributo::create([
            'id' => 9,
            'descripcion' => 'Errores Críticos de Usuario Final',
            'peso' => 75.7,
            'abreviatura_id' => 2,
            'matriz_id' => Matrices::ContactoInicialTelefonico->value
        ]);



// MATRIZ DE CALIDAD Y CALIBRACIONES PROCESO TELEFONICO ATENCIÓN PSICOSOCIAL
        Atributo::create([
            'id' => 10,
            'descripcion' => 'Errores No Críticos',
            'peso' => 100,
            'abreviatura_id' => 1,
            'matriz_id' => Matrices::AtencionPsicosocialTelefonico->value
        ]);

        Atributo::create([
            'id' => 11,
            'descripcion' => 'Errores Críticos',
            'peso' => 100,
            'abreviatura_id' => 3,
            'matriz_id' => Matrices::AtencionPsicosocialTelefonico->value
        ]);
    }
}
