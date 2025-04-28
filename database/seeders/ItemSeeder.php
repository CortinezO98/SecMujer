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





        Item::create([
            'id' => 13,
            'descripcion' => 'Apertura de la interacción por Whatsapp',
            'peso' => 10,
            'atributo_id' => Atributos::ErroresNoCriticosAPW->value
        ]);

        Item::create([
            'id' => 14,
            'descripcion' => 'Presentación de la profesional. (Aplica cuando se realizan orientaciones con elementos psicosociales por el canal de Whatsapp)',
            'peso' => 10,
            'atributo_id' => Atributos::ErroresNoCriticosAPW->value
        ]);

        Item::create([
            'id' => 15,
            'descripcion' => 'Empatía y Etiqueta',
            'peso' => 10,
            'atributo_id' => Atributos::ErroresNoCriticosAPW->value
        ]);

        Item::create([
            'id' => 16,
            'descripcion' => 'Tecnicismos',
            'peso' => 10,
            'atributo_id' => Atributos::ErroresNoCriticosAPW->value
        ]);

        Item::create([
            'id' => 17,
            'descripcion' => 'Tiempos',
            'peso' => 30,
            'atributo_id' => Atributos::ErroresNoCriticosAPW->value
        ]);

        Item::create([
            'id' => 18,
            'descripcion' => 'Guión de devolución',
            'peso' => 15,
            'atributo_id' => Atributos::ErroresNoCriticosAPW->value
        ]);

        Item::create([
            'id' => 19,
            'descripcion' => 'Guiones de Despedida',
            'peso' => 15,
            'atributo_id' => Atributos::ErroresNoCriticosAPW->value
        ]);






        Item::create([
            'id' => 20,
            'descripcion' => 'Habilidades Escritas',
            'peso' => 9.5,
            'atributo_id' => Atributos::ErroresCriticosNegocioAPW->value
        ]);

        Item::create([
            'id' => 21,
            'descripcion' => 'Tipificación Inconcert',
            'peso' => 9.5,
            'atributo_id' => Atributos::ErroresCriticosNegocioAPW->value
        ]);

        Item::create([
            'id' => 22,
            'descripcion' => ' Atención Psicosocial por WhatsApp (Aplica cuando se realizan orientaciones con elementos psicosociales por el canal de Whatsapp)',
            'peso' => 37,
            'atributo_id' => Atributos::ErroresCriticosNegocioAPW->value
        ]);

        Item::create([
            'id' => 23,
            'descripcion' => 'Manejo de herramientas y aplicativos',
            'peso' => 8,
            'atributo_id' => Atributos::ErroresCriticosNegocioAPW->value
        ]);




        Item::create([
            'id' => 24,
            'descripcion' => 'Lectura Previa',
            'peso' => 6,
            'atributo_id' => Atributos::ErroresCriticosUsuarioFinalAPW->value
        ]);

        Item::create([
            'id' => 25,
            'descripcion' => 'Trato a la mujer',
            'peso' => 6,
            'atributo_id' => Atributos::ErroresCriticosUsuarioFinalAPW->value
        ]);

        Item::create([
            'id' => 26,
            'descripcion' => ' Preguntas filtro',
            'peso' => 6,
            'atributo_id' => Atributos::ErroresCriticosUsuarioFinalAPW->value
        ]);

        Item::create([
            'id' => 27,
            'descripcion' => 'Solución del Requerimiento',
            'peso' => 18,
            'atributo_id' => Atributos::ErroresCriticosUsuarioFinalAPW->value
        ]);



// MATRIZ DE CALIDAD TELEFÓNICO EQUIPO DE CONTACTO INICIAL ERRORES NO CRITICOS
        Item::create([
            'id' => 28,
            'descripcion' => 'Apertura de la llamada',
            'peso' => 10,
            'atributo_id' => Atributos::ErroresNoCriticosCIT->value
        ]);

        Item::create([
            'id' => 29,
            'descripcion' => 'Disponibilidad',
            'peso' => 8,
            'atributo_id' => Atributos::ErroresNoCriticosCIT->value
        ]);

        Item::create([
            'id' => 30,
            'descripcion' => 'Escucha activa',
            'peso' => 10,
            'atributo_id' => Atributos::ErroresNoCriticosCIT->value
        ]);

        Item::create([
            'id' => 31,
            'descripcion' => 'Etiqueta Telefónica',
            'peso' => 7,
            'atributo_id' => Atributos::ErroresNoCriticosCIT->value
        ]);

        Item::create([
            'id' => 32,
            'descripcion' => 'Tiempos',
            'peso' => 14,
            'atributo_id' => Atributos::ErroresNoCriticosCIT->value
        ]);

        Item::create([
            'id' => 33,
            'descripcion' => 'Guiones de transferencia',
            'peso' => 20,
            'atributo_id' => Atributos::ErroresNoCriticosCIT->value
        ]);

        Item::create([
            'id' => 34,
            'descripcion' => 'Valida Información ',
            'peso' => 7,
            'atributo_id' => Atributos::ErroresNoCriticosCIT->value
        ]);

        Item::create([
            'id' => 35,
            'descripcion' => 'Guion de Despedida',
            'peso' => 6,
            'atributo_id' => Atributos::ErroresNoCriticosCIT->value
        ]);

        Item::create([
            'id' => 36,
            'descripcion' => 'Encuesta',
            'peso' => 6,
            'atributo_id' => Atributos::ErroresNoCriticosCIT->value
        ]);

        Item::create([
            'id' => 37,
            'descripcion' => 'Tipificación Inconcert',
            'peso' => 12,
            'atributo_id' => Atributos::ErroresNoCriticosCIT->value
        ]);
// FIN MATRIZ DE CALIDAD TELEFÓNICO EQUIPO DE CONTACTO INICIAL ERRORES NO CRITICOS




// MATRIZ DE CALIDAD TELEFÓNICO EQUIPO DE CONTACTO INICIAL ERRORES CRITICOS DE NEGOCIOS
        Item::create([
            'id' => 38,
            'descripcion' => 'Cuelgue Pasivo de la llamada',
            'peso' => 5.2,
            'atributo_id' => Atributos::ErroresCriticosNegocioCIT->value
        ]);

        Item::create([
            'id' => 39,
            'descripcion' => 'SIMISIONAL',
            'peso' => 16.4,
            'atributo_id' => Atributos::ErroresCriticosNegocioCIT->value
        ]);

        Item::create([
            'id' => 40,
            'descripcion' => ' Información Confidencial',
            'peso' => 2.70,
            'atributo_id' => Atributos::ErroresCriticosNegocioCIT->value
        ]);

// FIN MATRIZ DE CALIDAD TELEFÓNICO EQUIPO DE CONTACTO INICIAL ERRORES CRITICOS DE NEGOCIOS
        

// MATRIZ DE CALIDAD TELEFÓNICO EQUIPO DE CONTACTO INICIAL ERRORES CRITICOS USUARIO FINAL
        Item::create([
            'id' => 41,
            'descripcion' => 'Trato a la mujer',
            'peso' => 14.7,
            'atributo_id' => Atributos::ErroresCriticosUsuarioFinalCIT->value
        ]);

        Item::create([
            'id' => 42,
            'descripcion' => 'Preguntas Filtro',
            'peso' => 9,
            'atributo_id' => Atributos::ErroresCriticosUsuarioFinalCIT->value
        ]);

        Item::create([
            'id' => 43,
            'descripcion' => 'Devolución de llamadas',
            'peso' => 13,
            'atributo_id' => Atributos::ErroresCriticosUsuarioFinalCIT->value
        ]);

        Item::create([
            'id' => 44,
            'descripcion' => 'Reporte ICBF',
            'peso' => 6,
            'atributo_id' => Atributos::ErroresCriticosUsuarioFinalCIT->value
        ]);

        Item::create([
            'id' => 45,
            'descripcion' => 'Reporte SISVECOS',
            'peso' => 3,
            'atributo_id' => Atributos::ErroresCriticosUsuarioFinalCIT->value
        ]);

        Item::create([
            'id' => 46,
            'descripcion' => 'Solución del Requerimiento',
            'peso' => 9,
            'atributo_id' => Atributos::ErroresCriticosUsuarioFinalCIT->value
        ]);

        Item::create([
            'id' => 47,
            'descripcion' => 'Alertantes',
            'peso' => 6,
            'atributo_id' => Atributos::ErroresCriticosUsuarioFinalCIT->value
        ]);

        Item::create([
            'id' => 48,
            'descripcion' => 'Intervención en Crisis',
            'peso' => 3,
            'atributo_id' => Atributos::ErroresCriticosUsuarioFinalCIT->value
        ]);

        Item::create([
            'id' => 49,
            'descripcion' => 'Activación linea 123',
            'peso' => 6,
            'atributo_id' => Atributos::ErroresCriticosUsuarioFinalCIT->value
        ]);

        Item::create([
            'id' => 50,
            'descripcion' => 'Uso de la documentación',
            'peso' => 6,
            'atributo_id' => Atributos::ErroresCriticosUsuarioFinalCIT->value
        ]);
// FIN MATRIZ DE CALIDAD TELEFÓNICO EQUIPO DE CONTACTO INICIAL ERRORES CRITICOS USUARIO FINAL



// Atencion Psicosocial Telefonico Errores No Criticos 

        Item::create([
            'id' => 51,
            'descripcion' => 'Guion de Bienvenida',
            'peso' => 11.11,
            'atributo_id' => Atributos::ErroresNoCriticosAPT->value
        ]);

        Item::create([
            'id' => 52,
            'descripcion' => 'Disponibilidad',
            'peso' => 11.11,
            'atributo_id' => Atributos::ErroresNoCriticosAPT->value
        ]);

        Item::create([
            'id' => 53,
            'descripcion' => 'Tiempos',
            'peso' => 22.22,
            'atributo_id' => Atributos::ErroresNoCriticosAPT->value
        ]);

        Item::create([
            'id' => 54,
            'descripcion' => 'Claridad de la Información',
            'peso' => 11.11,
            'atributo_id' => Atributos::ErroresNoCriticosAPT->value
        ]);

        Item::create([
            'id' => 55,
            'descripcion' => 'Despedida',
            'peso' => 11.11,
            'atributo_id' => Atributos::ErroresNoCriticosAPT->value
        ]);

        Item::create([
            'id' => 56,
            'descripcion' => 'Encuesta de satisfacción',
            'peso' => 11.11,
            'atributo_id' => Atributos::ErroresNoCriticosAPT->value
        ]);

        Item::create([
            'id' => 57,
            'descripcion' => 'Inconcert',
            'peso' => 22.23,
            'atributo_id' => Atributos::ErroresNoCriticosAPT->value
        ]);

// FIN Atencion Psicosocial Telefonico Errores No Criticos 




// Atencion Psicosocial Telefonico Errores Criticos 
        Item::create([
            'id' => 58,
            'descripcion' => 'Cuelgue Pasivo',
            'peso' => 3,
            'atributo_id' => Atributos::ErroresCriticosAPT->value
        ]);

        Item::create([
            'id' => 59,
            'descripcion' => 'SIMISIONAL',
            'peso' => 32,
            'atributo_id' => Atributos::ErroresCriticosAPT->value
        ]);

        Item::create([
            'id' => 60,
            'descripcion' => 'Información Confidencial',
            'peso' => 4,
            'atributo_id' => Atributos::ErroresCriticosAPT->value
        ]);

        Item::create([
            'id' => 61,
            'descripcion' => 'Acciones No Permitidas',
            'peso' => 3,
            'atributo_id' => Atributos::ErroresCriticosAPT->value
        ]);

        Item::create([
            'id' => 62,
            'descripcion' => 'Atención Psicosocial',
            'peso' => 55,
            'atributo_id' => Atributos::ErroresCriticosAPT->value
        ]);

        Item::create([
            'id' => 63,
            'descripcion' => 'Documentación de uso para LPD.',
            'peso' => 3,
            'atributo_id' => Atributos::ErroresCriticosAPT->value
        ]);



    }
}
