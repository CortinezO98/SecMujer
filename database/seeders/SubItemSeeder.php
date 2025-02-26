<?php

namespace Database\Seeders;

use App\Models\SubItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('sub_items')->exists()) {
            DB::table('sub_items')->truncate();
        }
        
        SubItem::create([
            'id' => 1,
            'descripcion' => 'Utiliza el guion de bienvenida establecido definido por la Secretaría de la Mujer.',
            'item_id' => 1
        ]);

        SubItem::create([
            'id' => 2,
            'descripcion' => 'Utiliza el guion de bienvenida establecido definido por la Secretaría de la Mujer.',
            'item_id' => 2
        ]);

        SubItem::create([
            'id' => 3,
            'descripcion' => 'Justifica tiempo en espera.',
            'item_id' => 3
        ]);

        SubItem::create([
            'id' => 4,
            'descripcion' => 'Agradece tiempo en espera.',
            'item_id' => 3
        ]);

        SubItem::create([
            'id' => 5,
            'descripcion' => 'Finaliza la conversación por falta de interacción por parte de la mujer y/o ciudadania.',
            'item_id' => 3
        ]);

        SubItem::create([
            'id' => 6,
            'descripcion' => 'Utiliza el guión de devolución de llamadas.',
            'item_id' => 4
        ]);

        SubItem::create([
            'id' => 7,
            'descripcion' => 'Utiliza el guión de despedida definido para la campaña.',
            'item_id' => 5
        ]);

        SubItem::create([
            'id' => 8,
            'descripcion' => 'Utiliza el guion de despedida simple.',
            'item_id' => 5
        ]);

        SubItem::create([
            'id' => 9,
            'descripcion' => 'Ortografía y redacción.',
            'item_id' => 6
        ]);

        SubItem::create([
            'id' => 10,
            'descripcion' => 'La agente tipifica de manera adecuada la interacción en Inconcert.',
            'item_id' => 7
        ]);

        SubItem::create([
            'id' => 11,
            'descripcion' => 'Diligencia el campo de observaciones.',
            'item_id' => 7
        ]);

        SubItem::create([
            'id' => 12,
            'descripcion' => 'No brinda información confidencial.',
            'item_id' => 8
        ]);

        SubItem::create([
            'id' => 13,
            'descripcion' => 'No hace uso de Internet en páginas no permitidas.',
            'item_id' => 8
        ]);

        SubItem::create([
            'id' => 14,
            'descripcion' => 'La agente realiza una completa lectura de la interacción.',
            'item_id' => 9
        ]);

        SubItem::create([
            'id' => 15,
            'descripcion' => 'Muestra actitud de servicio.',
            'item_id' => 10
        ]);

        SubItem::create([
            'id' => 16,
            'descripcion' => 'Realiza preguntas filtro establecidas por la LPD para identificar la solicitud de la mujer.',
            'item_id' => 11
        ]);

        SubItem::create([
            'id' => 17,
            'descripcion' => 'No realiza preguntas que indaguen sobre la situación de violencia de la mujer. ',
            'item_id' => 11
        ]);

        SubItem::create([
            'id' => 18,
            'descripcion' => 'Hace uso del Manual, Novedades y el protocolo establecidos.',
            'item_id' => 12
        ]);

        SubItem::create([
            'id' => 19,
            'descripcion' => 'Direcciona correctamente a la mujer en la solicitud expuesta.',
            'item_id' => 12
        ]);

        SubItem::create([
            'id' => 20,
            'descripcion' => 'Ofrece alternativas de solución a la solicitud expuesta.',
            'item_id' => 12
        ]);




        SubItem::create([
            'id' => 21,
            'descripcion' => 'Utiliza el guion de bienvenida establecido definido por la Secretaría de la Mujer.',
            'item_id' => 13
        ]);

        SubItem::create([
            'id' => 22,
            'descripcion' => 'Hace uso del nombre SOFIA cuando realizan orientaciones con elementos psicosociales por el canal de WhatsApp',
            'item_id' => 14
        ]);

        SubItem::create([
            'id' => 23,
            'descripcion' => 'Mantiene una interacción armoniosa y cálida',
            'item_id' => 15
        ]);

        SubItem::create([
            'id' => 24,
            'descripcion' => 'Hace uso de tecnicismos aterrizados a la realidad de la mujer.',
            'item_id' => 16
        ]);

        SubItem::create([
            'id' => 25,
            'descripcion' => 'Justifica tiempo en espera.',
            'item_id' => 17
        ]);
        
        SubItem::create([
            'id' => 26,
            'descripcion' => 'Agradece tiempo en espera',
            'item_id' => 17
        ]);

        SubItem::create([
            'id' => 27,
            'descripcion' => 'Finaliza la conversación por falta de interacción por parte de la mujer y/o ciudadanía.',
            'item_id' => 17
        ]);

        SubItem::create([
            'id' => 28,
            'descripcion' => 'Utiliza el guion de devolución de llamadas.',
            'item_id' => 18
        ]);

        SubItem::create([
            'id' => 29,
            'descripcion' => 'Utiliza el guion de despedida definido para la campaña',
            'item_id' => 19
        ]);

        SubItem::create([
            'id' => 30,
            'descripcion' => 'Utiliza el guion de despedida simple.',
            'item_id' => 19
        ]);

        SubItem::create([
            'id' => 31,
            'descripcion' => 'Ortografía y redacción',
            'item_id' => 20
        ]);

        SubItem::create([
            'id' => 32,
            'descripcion' => 'La agente tipifica de manera adecuada la interacción.',
            'item_id' => 21
        ]);

        SubItem::create([
            'id' => 33,
            'descripcion' => 'Diligencia el campo de observaciones.',
            'item_id' => 21
        ]);

        SubItem::create([
            'id' => 34,
            'descripcion' => 'Identificar si la mujer requiere atención psicosocial por WhatsApp.',
            'item_id' => 22
        ]);

        SubItem::create([
            'id' => 35,
            'descripcion' => 'Indagar el contexto de la mujer.',
            'item_id' => 22
        ]);

        SubItem::create([
            'id' => 36,
            'descripcion' => 'Encuadre de la orientación y/o atención',
            'item_id' => 22
        ]);

        SubItem::create([
            'id' => 37,
            'descripcion' => 'Indagar el nivel de riesgo ',
            'item_id' => 22
        ]);

        SubItem::create([
            'id' => 38,
            'descripcion' => 'Tiempos durante la orientación con elementos psicosociales.',
            'item_id' => 22
        ]);

        SubItem::create([
            'id' => 39,
            'descripcion' => 'Guion de cierre',
            'item_id' => 22
        ]);

        SubItem::create([
            'id' => 40,
            'descripcion' => 'No brinda información confidencial.',
            'item_id' => 23
        ]);

        SubItem::create([
            'id' => 41,
            'descripcion' => 'La agente realiza una completa lectura de la interacción.',
            'item_id' => 24
        ]);

        SubItem::create([
            'id' => 42,
            'descripcion' => 'Muestra actitud de cálida y respetuosa durante la interacción.',
            'item_id' => 25
        ]);

        SubItem::create([
            'id' => 43,
            'descripcion' => 'Realiza preguntas filtro establecidas por la LPD para identificar la solicitud de la mujer.',
            'item_id' => 26
        ]);

        SubItem::create([
            'id' => 44,
            'descripcion' => 'Hace uso del Manual, Novedades y el protocolo establecidos.',
            'item_id' => 27
        ]);

        SubItem::create([
            'id' => 45,
            'descripcion' => 'Direcciona correctamente a la mujer en la solicitud expuesta.',
            'item_id' => 27
        ]);

        SubItem::create([
            'id' => 46,
            'descripcion' => 'Ofrece alternativas de solución a la solicitud expuesta.',
            'item_id' => 27
        ]);




        SubItem::create([
            'id' => 47,
            'descripcion' => 'Utiliza el guion de bienvenida definido para la campaña.',
            'item_id' => 28
        ]);

        SubItem::create([
            'id' => 48,
            'descripcion' => 'Contesta la llamada antes de los 10 segundos.',
            'item_id' => 29
        ]);

        SubItem::create([
            'id' => 49,
            'descripcion' => 'Esta atenta a la solicitud de la mujer.',
            'item_id' => 30
        ]);

        SubItem::create([
            'id' => 50,
            'descripcion' => 'El tono de voz es cálido y  genera empatía con la mujer.',
            'item_id' => 31
        ]);

        SubItem::create([
            'id' => 51,
            'descripcion' => 'Vocaliza adecuadamente y  mantiene una velocidad acorde para transmitir  la información.',
            'item_id' => 31
        ]);

        SubItem::create([
            'id' => 52,
            'descripcion' => 'Hace uso del Mute en los tiempos de espera a la mujer, retomando en los tiempos establecidos.',
            'item_id' => 32
        ]);

        SubItem::create([
            'id' => 53,
            'descripcion' => 'Retoma y agradece la espera.',
            'item_id' => 32
        ]);

        SubItem::create([
            'id' => 54,
            'descripcion' => 'La duración de la llamada es acorde con la solicitud.',
            'item_id' => 32
        ]);

        SubItem::create([
            'id' => 55,
            'descripcion' => 'Utiliza el guion de transferencia a la agente psicosocial',
            'item_id' => 33
        ]);

        SubItem::create([
            'id' => 56,
            'descripcion' => 'Utiliza el guion de transferencia en devolución de llamadas que han entrado vía WhatsApp.',
            'item_id' => 33
        ]);

        SubItem::create([
            'id' => 57,
            'descripcion' => 'Utiliza el guion de transferencia en casos de emergencia y se requiera el acompañamiento de una agente psicosocial',
            'item_id' => 33
        ]);

        SubItem::create([
            'id' => 58,
            'descripcion' => 'Utiliza los guiones definidos para las diferentes situaciones establecidas en el protocolo.',
            'item_id' => 34
        ]);

        SubItem::create([
            'id' => 59,
            'descripcion' => 'Utiliza el guion de despedida definido para la campaña.',
            'item_id' => 35
        ]);
        
        SubItem::create([
            'id' => 60,
            'descripcion' => 'Transfiere a la encuesta de satisfacción.',
            'item_id' => 36
        ]);

        SubItem::create([
            'id' => 61,
            'descripcion' => 'Cuelga la llamada brindando solución al requerimiento de la mujer.',
            'item_id' => 37
        ]);

        SubItem::create([
            'id' => 62,
            'descripcion' => 'Brinda guion por caída de aplicativos con autorización.',
            'item_id' => 37
        ]);

        SubItem::create([
            'id' => 63,
            'descripcion' => 'Registra el ID de la llamada arrojado por Inconcert en la herramienta del SIMISIONAL.',
            'item_id' => 38
        ]);

        SubItem::create([
            'id' => 64,
            'descripcion' => 'La agente diligencia los datos  correspondientes a la tipificación, como también de acuerdo al resultado de la llamada.',
            'item_id' => 38
        ]);

        SubItem::create([
            'id' => 65,
            'descripcion' => 'Registra la gestión al sistema SIMISIONAL.',
            'item_id' => 39
        ]);

        SubItem::create([
            'id' => 66,
            'descripcion' => 'La agente indaga y diligencia los datos sociodemográficos y diligencia el campo de narrativa con la observación de la llamada en el SIMISIONAL.',
            'item_id' => 39
        ]);

        SubItem::create([
            'id' => 67,
            'descripcion' => 'No brinda información confidencial.',
            'item_id' => 40
        ]);

        SubItem::create([
            'id' => 68,
            'descripcion' => 'No interrumpe a la mujer con un tono de voz fuerte y/o agresivo.',
            'item_id' => 41
        ]);

        SubItem::create([
            'id' => 69,
            'descripcion' => 'No agrede a la mujer con palabras soeces.',
            'item_id' => 41
        ]);

        SubItem::create([
            'id' => 70,
            'descripcion' => 'Evita discusiones con la mujer.',
            'item_id' => 41
        ]);


        SubItem::create([
            'id' => 71,
            'descripcion' => 'Utiliza preguntas filtro para  orientar a la mujer en su solicitud.',
            'item_id' => 42
        ]);

        SubItem::create([
            'id' => 72,
            'descripcion' => 'No realiza preguntas que indaguen sobre la situación de violencia de la mujer',
            'item_id' => 42
        ]);

        SubItem::create([
            'id' => 73,
            'descripcion' => 'Confirma la información brindada al finalizar la llamada.',
            'item_id' => 42
        ]);


        SubItem::create([
            'id' => 74,
            'descripcion' => 'Hace uso del Manual, Novedades y el protocolo establecidos',
            'item_id' => 43
        ]);

        SubItem::create([
            'id' => 75,
            'descripcion' => 'Direcciona correctamente a la mujer en la solicitud expuesta.',
            'item_id' => 43
        ]);

        SubItem::create([
            'id' => 76,
            'descripcion' => 'Ofrece alternativas de solución a la solicitud expuesta',
            'item_id' => 43
        ]);
    }
}
