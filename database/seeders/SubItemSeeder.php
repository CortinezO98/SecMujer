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

    }
}
