<?php

namespace Database\Seeders;

use App\Models\SubItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Ramsey\Uuid\v1;

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




        // MATRIZ DE CALIDAD TELEFÓNICO CONTACTO INICIAL

        // Apertura de la llamada
        SubItem::create([
            'id' => 47,
            'descripcion' => 'Utiliza el guion de bienvenida definido para la campaña.',
            'item_id' => 28
        ]);

        // Disponibilidad
        SubItem::create([
            'id' => 48,
            'descripcion' => 'Contesta la llamada antes de los 10 segundos.',
            'item_id' => 29
        ]);

        // Escucha activa
        SubItem::create([
            'id' => 49,
            'descripcion' => 'Esta atenta a la solicitud de la mujer.',
            'item_id' => 30
        ]);

        // Etiqueta Telefónica
        SubItem::create([
            'id' => 50,
            'descripcion' => 'Vocaliza adecuadamente y mantiene una velocidad acorde para transmitir la información.',
            'item_id' => 31
        ]);

        // Tiempos
        SubItem::create([
            'id' => 51,
            'descripcion' => 'Hace uso del Mute en los tiempos de espera a la mujer, retomando en los tiempos establecidos.',
            'item_id' => 32
        ]);

        SubItem::create([
            'id' => 52,
            'descripcion' => 'Retoma y agradece la espera.',
            'item_id' => 32
        ]);


        // Guiones de transferencia
        SubItem::create([
            'id' => 53,
            'descripcion' => 'Utiliza el guion de transferencia a la agente psicosocial',
            'item_id' => 33
        ]);

        SubItem::create([
            'id' => 54,
            'descripcion' => 'Utiliza el guion de transferencia en devolución de llamadas que han entrado vía WhatsApp.',
            'item_id' => 33
        ]);


        // Valida Información 
        SubItem::create([
            'id' => 55,
            'descripcion' => 'Confirma la información brindada al finalizar la llamada',
            'item_id' => 34
        ]);

        // Guion de Despedida
        SubItem::create([
            'id' => 56,
            'descripcion' => 'Utiliza el guion de despedida definido para la campaña.',
            'item_id' => 35
        ]);


        // Encuesta
        SubItem::create([
            'id' => 57,
            'descripcion' => 'Transfiere a la encuesta de satisfacción.',
            'item_id' => 36
        ]);

        // Tipificación Inconcert
        SubItem::create([
            'id' => 58,
            'descripcion' => 'Tipifica correctamente en Inconcert de acuerdo con el resultado de la llamada. ',
            'item_id' => 37
        ]);

        SubItem::create([
            'id' => 59,
            'descripcion' => 'Las observaciones registradas son acordes con lo informado por la mujer. ',
            'item_id' => 37
        ]);



        // Cuelgue Pasivo de la llamada
        SubItem::create([
            'id' => 60,
            'descripcion' => 'Cuelga la llamada sin brindar solución al requerimiento de la mujer ',
            'item_id' => 38
        ]);

        SubItem::create([
            'id' => 61,
            'descripcion' => 'Incentiva el cuelgue de la llamada por parte de la mujer; o la agente finaliza la llamada de manera abrupta.',
            'item_id' => 38
        ]);

        
        // SIMISIONAL
        SubItem::create([
            'id' => 62,
            'descripcion' => 'Registra la orientación en el sistema SIMISIONAL el mismo día en que recibe la llamada.',
            'item_id' => 39
        ]);

        SubItem::create([
            'id' => 63,
            'descripcion' => 'Registra el ID de la llamada arrojado por Inconcert en la herramienta del SIMISIONAL.',
            'item_id' => 39
        ]);

        SubItem::create([
            'id' => 64,
            'descripcion' => 'Registra la atención/llamada en el sistema SIMISIONAL. ',
            'item_id' => 39
        ]);

        SubItem::create([
            'id' => 65,
            'descripcion' => 'Indaga y diligencia los datos sociodemográficos en el sistema SIMISIONAL ',
            'item_id' => 39
        ]);

        SubItem::create([
            'id' => 66,
            'descripcion' => 'Diligencia el campo “Narrativa de la llamada” de manera adecuada',
            'item_id' => 39
        ]);

        SubItem::create([
            'id' => 67,
            'descripcion' => 'Diligencia el formulario de contacto inicial fallido de manera adecuada',
            'item_id' => 39
        ]);




        // Información Confidencial
        SubItem::create([
            'id' => 68,
            'descripcion' => 'No brinda información confidencial.',
            'item_id' => 40
        ]);

        // Trato a la mujer
        SubItem::create([
            'id' => 69,
            'descripcion' => 'La agente es empática con la mujer.',
            'item_id' => 41
        ]);

        SubItem::create([
            'id' => 70,
            'descripcion' => 'Personaliza la llamada con el nombre de la mujer. ',
            'item_id' => 41
        ]);

        SubItem::create([
            'id' => 71,
            'descripcion' => 'No interrumpe a la mujer con un tono de voz fuerte y/o agresivo.',
            'item_id' => 41
        ]);

        SubItem::create([
            'id' => 72,
            'descripcion' => 'No agrede a la mujer con palabras soeces.',
            'item_id' => 41
        ]);

        SubItem::create([
            'id' => 73,
            'descripcion' => 'Evita discusiones con la mujer. ',
            'item_id' => 41
        ]);



        // Preguntas Filtro
        SubItem::create([
            'id' => 74,
            'descripcion' => 'Utiliza las preguntas filtro establecidas para orientar adecuadamente a la mujer.',
            'item_id' => 42
        ]);

        SubItem::create([
            'id' => 75,
            'descripcion' => 'Explica los tipos de violencias según lo contemplado en la Ley 1257/2008.',
            'item_id' => 42
        ]);

        SubItem::create([
            'id' => 76,
            'descripcion' => 'No realiza preguntas abiertas que indaguen sobre la situación de violencia de la mujer.',
            'item_id' => 42
        ]);


        //Devolución de llamadas 
        SubItem::create([
            'id' => 77,
            'descripcion' => 'Deja un mensaje de voz con los datos de la LPD cuando se realiza la devolución.',
            'item_id' => 43
        ]);

        SubItem::create([
            'id' => 78,
            'descripcion' => 'Valida si puede recibir la llamada al momento de la devolución.',
            'item_id' => 43
        ]);

        SubItem::create([
            'id' => 79,
            'descripcion' => 'Guion de SIDICU.',
            'item_id' => 43
        ]);

        SubItem::create([
            'id' => 80,
            'descripcion' => 'Preguntas filtro para las llamadas de origen: Fantasma, abandonada y Buzón.',
            'item_id' => 43
        ]);


        // Reporte ICBF
        SubItem::create([
            'id' => 81,
            'descripcion' => 'Realiza reporte a ICBF',
            'item_id' => 44
        ]);

        SubItem::create([
            'id' => 82,
            'descripcion' => 'Uso plantilla y correo ICBF',
            'item_id' => 44
        ]);


        // Reporte SISVECOS
        SubItem::create([
            'id' => 83,
            'descripcion' => 'Hace reporte a SISVECOS',
            'item_id' => 45
        ]);


        // Solución del Requerimiento
        SubItem::create([
            'id' => 84,
            'descripcion' => 'Direcciona correctamente a la mujer en la solicitud expuesta.',
            'item_id' => 46
        ]);

        SubItem::create([
            'id' => 85,
            'descripcion' => 'Ofrece alternativas de solución a la solicitud expuesta.',
            'item_id' => 46
        ]);

        SubItem::create([
            'id' => 86,
            'descripcion' => 'Transfiere correctamente las llamadas al equipo de atención psicosocial.',
            'item_id' => 46
        ]);

        
        // Alertantes
        SubItem::create([
            'id' => 87,
            'descripcion' => 'Realiza las preguntas filtro establecidas para alertantes.',
            'item_id' => 47
        ]);

        SubItem::create([
            'id' => 88,
            'descripcion' => 'No indaga por los datos de la mujer víctima.',
            'item_id' => 47
        ]);


        // Intervención en Crisis
        SubItem::create([
            'id' => 89,
            'descripcion' => 'Realiza técnicas de estabilización emocional y contención en crisis.',
            'item_id' => 48
        ]);


        // Activación linea 123
        SubItem::create([
            'id' => 90,
            'descripcion' => 'Activa línea 123 en casos de emergencia.',
            'item_id' => 49
        ]);

        SubItem::create([
            'id' => 91,
            'descripcion' => 'Envió de correo de notificación a integracionlpd-123.',
            'item_id' => 49
        ]);

        // Uso de la documentación
        SubItem::create([
            'id' => 92,
            'descripcion' => 'Uso de la Guía, Anexos, Documentos, Novedades y Actualizaciones generadas a los mismos.',
            'item_id' => 50
        ]);

        SubItem::create([
            'id' => 93,
            'descripcion' => ' Usa el directorio de la LPD.',
            'item_id' => 50
        ]);






// SUBITEM ATENCION PSICOSOCIAL ERRORES NO CRITICOS
        SubItem::create([
            'id' => 94,
            'descripcion' => 'Utiliza el guion de bienvenida definido para Línea Púrpura Distrital.',
            'item_id' => 51
        ]);

        SubItem::create([
            'id' => 95,
            'descripcion' => 'Contesta la llamada antes de los 10 segundos.',
            'item_id' => 52
        ]);

        SubItem::create([
            'id' => 96,
            'descripcion' => 'Usa el "Mute".',
            'item_id' => 53
        ]);

        SubItem::create([
            'id' => 97,
            'descripcion' => 'Retoma y agradece la espera.',
            'item_id' => 53
        ]);

        SubItem::create([
            'id' => 98,
            'descripcion' => 'Confirma la información brindada al finalizar la llamada. ',
            'item_id' => 54
        ]);

        SubItem::create([
            'id' => 99,
            'descripcion' => 'Utiliza el guion de despedida definido para Línea Púrpura Distrital.',
            'item_id' => 55
        ]);

        SubItem::create([
            'id' => 100,
            'descripcion' => 'Transfiere la llamada a la encuesta de satisfacción.',
            'item_id' => 56
        ]);

        SubItem::create([
            'id' => 101,
            'descripcion' => 'Registra el ID de la llamada arrojado por el sistema Inconcert en la herramienta del SIMISIONAL',
            'item_id' => 57
        ]);

        SubItem::create([
            'id' => 102,
            'descripcion' => 'Tipifica de forma correcta la llamada en el sistema Inconcert de acuerdo con el resultado de la llamada.',
            'item_id' => 57
        ]);
// FIN






//  SUBITEM ATENCION PSICOSOCIAL ERRORES CRITICOS
        SubItem::create([
            'id' => 103,
            'descripcion' => 'Incentiva el cuelgue de la llamada por parte de la mujer; o la profesional termina la llamada.',
            'item_id' => 58
        ]);

        SubItem::create([
            'id' => 104,
            'descripcion' => 'Conocimiento y autorización de datos.',
            'item_id' => 59
        ]);

        SubItem::create([
            'id' => 105,
            'descripcion' => 'Registra la atención/llamada en el sistema SIMISIONAL. ',
            'item_id' => 59
        ]);

        SubItem::create([
            'id' => 106,
            'descripcion' => 'Caracterización de la mujer y la atención.',
            'item_id' => 59
        ]);

        SubItem::create([
            'id' => 107,
            'descripcion' => 'Diligenciamiento de la atención.',
            'item_id' => 59
        ]);

        SubItem::create([
            'id' => 108,
            'descripcion' => 'Habilidades escritas',
            'item_id' => 59
        ]);

        SubItem::create([
            'id' => 109,
            'descripcion' => 'No brinda información confidencial.',
            'item_id' => 60
        ]);

        SubItem::create([
            'id' => 110,
            'descripcion' => 'Duración de la llamada',
            'item_id' => 61
        ]);

        SubItem::create([
            'id' => 111,
            'descripcion' => 'Culminación de la atención',
            'item_id' => 61
        ]);

        SubItem::create([
            'id' => 112,
            'descripcion' => 'Atención Integral',
            'item_id' => 61
        ]);

        SubItem::create([
            'id' => 113,
            'descripcion' => 'Escucha Activa',
            'item_id' => 62
        ]);

        SubItem::create([
            'id' => 114,
            'descripcion' => 'Postura horizontal y relación de colaboración con la mujer',
            'item_id' => 62
        ]);

        SubItem::create([
            'id' => 115,
            'descripcion' => 'Violencias',
            'item_id' => 62
        ]);

        SubItem::create([
            'id' => 116,
            'descripcion' => 'Abordaje emocional',
            'item_id' => 62
        ]);

        SubItem::create([
            'id' => 117,
            'descripcion' => 'Conceptualización del caso',
            'item_id' => 62
        ]);

        SubItem::create([
            'id' => 118,
            'descripcion' => 'Redes de apoyo',
            'item_id' => 62
        ]);

        SubItem::create([
            'id' => 119,
            'descripcion' => 'Factores de Riesgo & Protectores (Anexo 6. Guía Orientadora para La Identificación de Factores de Riesgo y Protectores Frente al Feminicidio).',
            'item_id' => 62
        ]);

        SubItem::create([
            'id' => 120,
            'descripcion' => 'Remisiones',
            'item_id' => 62
        ]);

        SubItem::create([
            'id' => 121,
            'descripcion' => 'Orientación general en aspectos jurídicos',
            'item_id' => 62
        ]);

        SubItem::create([
            'id' => 122,
            'descripcion' => 'Alertantes',
            'item_id' => 62
        ]);

        SubItem::create([
            'id' => 123,
            'descripcion' => 'Seguimientos',
            'item_id' => 62
        ]);


        

        SubItem::create([
            'id' => 124,
            'descripcion' => 'Hace uso de la Guía, anexos, documentos, novedades y actualizaciones generadas a los mismos. ',
            'item_id' => 63
        ]);


    }
}
