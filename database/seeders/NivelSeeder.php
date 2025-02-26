<?php

namespace Database\Seeders;

use App\Models\Nivel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NivelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('nivels')->exists()) {
            DB::table('nivels')->truncate();
        }
        

        Nivel::create([
            'id' => 1,
            'descripcion' => '',
            'sub_item_id' => 77
        ]);

        Nivel::create([
            'id' => 2,
            'descripcion' => '',
            'sub_item_id' => 78
        ]);

        Nivel::create([
            'id' => 3,
            'descripcion' => '',
            'sub_item_id' => 79
        ]);

        Nivel::create([
            'id' => 4,
            'descripcion' => '',
            'sub_item_id' => 80
        ]);

        Nivel::create([
            'id' => 5,
            'descripcion' => '',
            'sub_item_id' => 81
        ]);

        Nivel::create([
            'id' => 6,
            'descripcion' => '',
            'sub_item_id' => 82
        ]);

        Nivel::create([
            'id' => 7,
            'descripcion' => '',
            'sub_item_id' => 83
        ]);

        Nivel::create([
            'id' => 8,
            'descripcion' => '',
            'sub_item_id' => 84
        ]);

        Nivel::create([
            'id' => 9,
            'descripcion' => '',
            'sub_item_id' => 85
        ]);






        Nivel::create([
            'id' => 10,
            'descripcion' => 'NIVEL 1: La profesional debe evitar dejar tiempo prolongado a la mujer en espera ocasionando que esta finalice la llamada.',
            'sub_item_id' => 86
        ]);

        Nivel::create([
            'id' => 11,
            'descripcion' => 'NIVEL 2: La profesional simula tener fallas en el sistema para incentivar el cuelgue de la llamada.',
            'sub_item_id' => 86
        ]);

        Nivel::create([
            'id' => 12,
            'descripcion' => 'NIVEL 3: La profesional motiva realizar el cuelgue de la llamada sin haber solucionado el requerimiento de la mujer.',
            'sub_item_id' => 86
        ]);
        



        Nivel::create([
            'id' => 13,
            'descripcion' => 'NIVEL 1: La profesional indaga con la mujer si desea brindar y guardar sus datos en el sistema de información de la SDMujer.',
            'sub_item_id' => 87
        ]);

        Nivel::create([
            'id' => 14,
            'descripcion' => 'NIVEL 2: La profesional informa a la mujer sobre el objetivo de la toma de datos a fin de evitar situaciones de revictimización cuando se comunique en futuras ocasiones con LPD a partir del registro de datos en el SIMISIONAL.',
            'sub_item_id' => 87
        ]);

        Nivel::create([
            'id' => 15,
            'descripcion' => 'NIVEL 3: La profesional debe consultar el caso de forma completa en el SIMISIONAL si la mujer se ha comunicado con anterioridad y lo informado por anteriores profesionales de LPD o otras estrategias de la SDMujer evitando acciones con daño y situaciones de  revictimización de las mujeres. (Debe solicitar el tiempo en espera para realizar la respectiva validación, lectura del caso y a partir de lo registrado en SIMISIONAL dar continuidad a la orientación solicitada por la mujer).',
            'sub_item_id' => 87
        ]);







        Nivel::create([
            'id' => 16,
            'descripcion' => 'NIVEL 1: La profesional registra la atención en el formulario correcto del sistema de información SIMISIONAL (dependiendo el formulario que aplique: Bogotá, Fuera de Bogotá, Alertantes, Seguimientos y Otras Atenciones).El formulario de Otras Atenciones se emplea para guardar casos que no son de VBG y DSR.',
            'sub_item_id' => 88
        ]);

        Nivel::create([
            'id' => 17,
            'descripcion' => 'NIVEL 2: La profesional registra la atención el mismo día en que recibe la llamada o máximo al día siguiente solo en caso de tener turno de la madrugada.',
            'sub_item_id' => 88
        ]);



        Nivel::create([
            'id' => 1,
            'descripcion' => <<<EOT
                NIVEL 1: La profesional diligencia los datos sociodemográficos en los casos que aplique: 
                SI ES UNA LLAMADA DE BOGOTA
                Nombre completo. (si no desea brindarlo colocar ANÓNIMO). 
                Fecha de nacimiento. 
                País de nacimiento. 
                Tipo de identificación. 
                Número de identificación. 
                País de expedición
                Dirección y Ubicación
                Localidad. 
                Teléfono Móvil o Fijo.
                Estado Civil
                Edad
                Correo Electrónico
                Tipo de discapacidad. 
                Grupo étnico. 
                Escolaridad. 
                Ocupación
                Sexo. 
                Identidad de Género. 
                Orientación Sexual. 
                *Número de contacto de emergencia                                                                                                                                                                                                                                                                                      SI ES UNA LLAMADA FUERA DE BOGOTA
                Nombre completo. (si no brinda información se registra como ANÓNIMO). 
                Tipo de identificación. 
                Número de identificación. W5
                Teléfono Móvil o Fijo. 
                Sexo. 
                Identidad de Género. 
                Orientación Sexual. 
                SI ES UNA LLAMADA ALERTANTE
                Nombre completo. (si no lo brinda registrar como ANÓNIMO). 
                Tipo de identificación. 
                Número de identificación. 
                Teléfono Móvil o Fijo.
                Sexo. 
                Identidad de Género. 
                Orientación Sexual. 
                SI ES UNA LLAMADA OTRAS ATENCIONES
                Nombre completo. (si no lo brinda registrar como ANÓNIMO). 
                Tipo de identificación. 
                Número de identificación. 
                Fecha de Nacimiento.
                Teléfono Móvil o Fijo.
                Sexo. 
                Localidad.
                Dirección.	
            EOT,
            'sub_item_id' => 1
        ]);
    }
}
