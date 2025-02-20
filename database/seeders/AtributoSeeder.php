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
            'peso' => 100,
            'matriz_id' => Matrices::ContactoInicialWhatsapp->value
        ]);

        Atributo::create([
            'id' => 3,
            'descripcion' => 'Errores Críticos de Usuario Final',
            'peso' => 100,
            'matriz_id' => Matrices::ContactoInicialWhatsapp->value
        ]);
    }
}
