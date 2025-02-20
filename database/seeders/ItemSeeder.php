<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Enums\Atributos;
use App\Models\Item;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('items')->exists()) {
            DB::table('items')->truncate();
        }
        
        Item::create([
            'id' => 1,
            'descripcion' => 'Apertura de la interacción por Whatsapp',
            'peso' => 20,
            'atributo_id' => Atributos::ErroresNoCriticosCIW->value
        ]);

        Item::create([
            'id' => 2,
            'descripcion' => 'Empatía y Etiqueta',
            'peso' => 20,
            'atributo_id' => Atributos::ErroresNoCriticosCIW->value
        ]);

        Item::create([
            'id' => 3,
            'descripcion' => 'Tiempos',
            'peso' => 30,
            'atributo_id' => Atributos::ErroresNoCriticosCIW->value
        ]);

        Item::create([
            'id' => 4,
            'descripcion' => 'Guión de devolución',
            'peso' => 15,
            'atributo_id' => Atributos::ErroresNoCriticosCIW->value
        ]);

        Item::create([
            'id' => 5,
            'descripcion' => 'Guiones de Despedida',
            'peso' => 15,
            'atributo_id' => Atributos::ErroresNoCriticosCIW->value
        ]);

        Item::create([
            'id' => 6,
            'descripcion' => 'Habilidades Escritas',
            'peso' => 8,
            'atributo_id' => Atributos::ErroresCriticosNegocioCIW->value
        ]);

        Item::create([
            'id' => 7,
            'descripcion' => 'Tipificación',
            'peso' => 18,
            'atributo_id' => Atributos::ErroresCriticosNegocioCIW->value
        ]);

        Item::create([
            'id' => 8,
            'descripcion' => 'Manejo de herramientas y aplicativos',
            'peso' => 8,
            'atributo_id' => Atributos::ErroresCriticosNegocioCIW->value
        ]);

        Item::create([
            'id' => 9,
            'descripcion' => 'Lectura Previa',
            'peso' => 9,
            'atributo_id' => Atributos::ErroresCriticosUsuarioFinalCIW->value
        ]);

        Item::create([
            'id' => 10,
            'descripcion' => 'Trato a la mujer',
            'peso' => 9,
            'atributo_id' => Atributos::ErroresCriticosUsuarioFinalCIW->value
        ]);

        Item::create([
            'id' => 11,
            'descripcion' => 'Preguntas filtro',
            'peso' => 20,
            'atributo_id' => Atributos::ErroresCriticosUsuarioFinalCIW->value
        ]);

        Item::create([
            'id' => 12,
            'descripcion' => 'Solución del Requerimiento',
            'peso' => 28,
            'atributo_id' => Atributos::ErroresCriticosUsuarioFinalCIW->value
        ]);
    }
}
