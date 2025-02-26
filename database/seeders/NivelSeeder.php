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
            'descripcion' => <<<EOT
                NIVEL 1: La profesional debe evitar dejar tiempo prolongado a la mujer en espera ocasionando que esta finalice la llamada.        
            EOT,
            'sub_item_id' => 86
        ]);

        Nivel::create([
            'id' => 11,
            'descripcion' => <<<EOT
                NIVEL 2: La profesional simula tener fallas en el sistema para incentivar el cuelgue de la llamada.        
            EOT,
            'sub_item_id' => 86
        ]);

        Nivel::create([
            'id' => 12,
            'descripcion' => <<<EOT
                NIVEL 3: La profesional motiva realizar el cuelgue de la llamada sin haber solucionado el requerimiento de la mujer.        
            EOT,
            'sub_item_id' => 86
        ]);


        


        Nivel::create([
            'id' => 13,
            'descripcion' => <<<EOT
                NIVEL 1: La profesional indaga con la mujer si desea brindar y guardar sus datos en el sistema de información de la SDMujer.        
            EOT,
            'sub_item_id' => 87
        ]);

        Nivel::create([
            'id' => 14,
            'descripcion' => <<<EOT
                NIVEL 2: La profesional informa a la mujer sobre el objetivo de la toma de datos a fin de evitar situaciones de revictimización cuando se comunique en futuras ocasiones con LPD a partir del registro de datos en el SIMISIONAL.        
            EOT,
            'sub_item_id' => 87
        ]);

        Nivel::create([
            'id' => 15,
            'descripcion' => <<<EOT
                NIVEL 3: La profesional debe consultar el caso de forma completa en el SIMISIONAL si la mujer se ha comunicado con anterioridad y lo informado por anteriores profesionales de LPD o otras estrategias de la SDMujer evitando acciones con daño y situaciones de  revictimización de las mujeres. (Debe solicitar el tiempo en espera para realizar la respectiva validación, lectura del caso y a partir de lo registrado en SIMISIONAL dar continuidad a la orientación solicitada por la mujer).        
            EOT,
            'sub_item_id' => 87
        ]);







        Nivel::create([
            'id' => 16,
            'descripcion' => <<<EOT
                NIVEL 1: La profesional registra la atención en el formulario correcto del sistema de información SIMISIONAL (dependiendo el formulario que aplique: Bogotá, Fuera de Bogotá, Alertantes, Seguimientos y Otras Atenciones).El formulario de Otras Atenciones se emplea para guardar casos que no son de VBG y DSR.        
            EOT,
            'sub_item_id' => 88
        ]);

        Nivel::create([
            'id' => 17,
            'descripcion' => <<<EOT
                NIVEL 2: La profesional registra la atención el mismo día en que recibe la llamada o máximo al día siguiente solo en caso de tener turno de la madrugada.        
            EOT,
            'sub_item_id' => 88
        ]);




        Nivel::create([
            'id' => 18,
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
                *Número de contacto de emergencia                                                                                                                                    SI ES UNA LLAMADA FUERA DE BOGOTA
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
            'sub_item_id' => 89
        ]);

        Nivel::create([
            'id' => 19,
            'descripcion' => <<<EOT
                NIVEL 2: La profesional diligencia los datos referente a la atención realizada en el momento en los casos que aplique:                                                          
                SI ES UNA LLAMADA DE BOGOTA
                Nombre Grabación.
                Nombre Grabación Adicional. 
                Fecha de atención. 
                La mujer presenta riesgo de feminicidio.
                ¿Tuvo barreras?
                Intervención
                Tipos de violencias
                Motivo de atención.
                Ámbito
                Fecha de llamada.
                Hora de inicio
                Hora final
                ¿Cómo se enteró de la línea?

                SI ES UNA LLAMADA DE FUERA BOGOTA
                Nombre Grabación
                Nombre Grabación adicional
                Riesgo de feminicidio
                ¿Tuvo barreras?
                Llamo para solicitar
                Tipos de violencias
                Motivo de atención
                Ámbito
                Fecha de llamada
                Hora de inicio
                Hora final
                Departamento de la llamada
                ¿:Cómo se enteró de la línea?
                SI ES UNA LLAMADA ALERTANTE
                Fecha de llamada
                Hora de inicio
                Hora final
                ¿:Cómo se enteró de la línea?
                Nombre de la víctima
                Teléfono de la víctima
                Sexo de la víctima
                Relación con la mujer
                Motivo de llamada
                Ámbito
                Nombre del agresor
                Nombre Grabación
                Nombre Grabación adicional
                SEGUIMIENTOS
                Nombre Grabación
                Fecha del seguimiento. 
                Hora de inicio. 
                Hora final.
                Origen de la llamada. 
                Tipo de Seguimiento
                ¿Tuvo barreras?
                La mujer presenta riesgo de feminicidio
                SI ES UNA LLAMADA OTRAS ATENCIONES
                ID de atención.
                Fecha de llamada.
                Hora de inicio.
                Hora final
                Medio de contacto.
                Nombre Grabación.
                Se transfiere al Equipo de atención Psicosocial?	
            EOT,
            'sub_item_id' => 89
        ]);

        Nivel::create([
            'id' => 20,
            'descripcion' => <<<EOT
                NIVEL 3: La profesional diligencia los datos referentes al proceso jurídico y remisiones a estrategias de la SDMujer en las llamadas que aplique:                                                               EN LAS LLAMADAS DE BOGOTÁ
                ¿Traslado a comisaría de familia?
                ¿Ha denunciado?
                ¿Dónde hizo la denuncia?
                ¿Cuándo hizo la denuncia?
                ¿Cuenta con medida de protección?
                ¿La mujer fue remitida por alguno de los siguientes servicios?
                ¿A cuáles de los servicios se remite?
                EN LAS LLAMADAS DE ALERTANTES
                ¿La atención es derivada de alguno de los siguientes servicios?
                ¿A cuáles de los servicios se remite?                                                                                                                                                                                                                                                                                     EN LAS LLAMADAS DE FUERA DE BOGOTÁ
                ¿Ha denunciado?
                ¿Dónde hizo la denuncia?
                ¿Cuándo hizo la denuncia?
                ¿Cuenta con medida de protección?
                ¿El/La agresor(a) ha incumplido la medida de protección?
                ¿La atención es derivada de alguno de los siguientes servicios?
                ¿A cuáles de los servicios se remite?
                SEGUIMIENTOS:
                ¿A cuáles de los servicios se remite?	
            EOT,
            'sub_item_id' => 89
        ]);


        Nivel::create([
            'id' => 21,
            'descripcion' => <<<EOT
                NIVEL 1: La profesional diligencia el campo de NARRATIVA DE LA LLAMADA de acuerdo con los siguientes lineamientos: 
                A. Se debe diligenciar fiel a lo que indica la mujer cuando relata el hecho de violencia, teniendo en cuenta: ¿Qué paso?, ¿Cómo?, ¿Quién?, ¿Cuándo? y ¿Dónde? 
                B. Se redacta entre comillas en primera persona. 
                C. Al inicio debe especificar el canal de ingreso de la solicitud de atención y si viene remitido por alguna estrategia.
                APLICA PARA LOS FORMULARIOS DE BOGOTÁ, FUERA DE BOGOTÁ Y ALERTANTES.	
            EOT,
            'sub_item_id' => 90
        ]);

        Nivel::create([
            'id' => 22,
            'descripcion' => <<<EOT
                NIVEL 2: La profesional diligencia el campo de ANÁLISIS DE LA LLAMADA de acuerdo con los siguientes lineamientos:
                A. Víctima o Alertante que se comunica desde (incluir Bogotá o lugar desde dónde se encuentra ubicado), o si fue remitido por alguna institución u equipo/estrategia de la entidad.
                B. Descripción de la situación, indicando: qué  y cómo ocurrió, a qué tipo de delito o violencia corresponde y quién es el presunto agresor.
                C. Ocurrencia, si es una fecha exacta incluirla o el periodo de tiempo en que han ocurrido los hechos; corresponde a cuándo y dónde ocurrieron los hechos. 
                D. Acciones a la fecha, incluir hasta la fecha si ha iniciado acciones con la Secretaría o con alguna otra institución.
                E. Otros factores, asociados al ámbito de ocurrencia, la relación entre la víctima y el agresor, la edad de la víctima, si se requiere atención en salud, y si es requerido el acompañamiento psicosocial y si hay una característica diferencial relevante describir en el análisis si esta es relevante para la atención, ya sea porque es determinante en los hechos, los riesgos, las circunstancias modificadoras.
                F. La organización del relato debe reflejar los factores de riesgo identificados durante la atención teniendo en cuenta el anexo 6.                                                                   G. Apreciaciones de la profesional: es todo aquello que se identificó durante la atención que no se encuentra dentro de las categorías de selección tales como:  si había dificultades de la mujer para continuar con la conversación, si su relato manejaba o no línea de tiempo, si mencionó algún tipo de diagnóstico en salud mental, impactos emocionales, relacionales, físicos y/o económicos producto de las violencias, redes de apoyo, entre otras, que se considere porque implica realizar ajustes razonables en la atención para hacer la misma accesible para quien consulta y será  importante para continuar con la atención. 

                Se redacta en tercera persona en tiempo pasado. Se analiza la situación de violencias y se plantean los compromisos, recomendaciones, o acuerdos generados para la finalización de la llamada en caso de que aplique. Se sugiere separar la información por puntos para dar mayor claridad, y en cada aspecto iniciar con el título de la información a registrar.

                En el checklist, debe estar selecionada la opción "Se autoriza remisión a otras estrategias SDMujer" de manera obligatoria si se envía remisión a la estrategia ofertada.	
            EOT,
            'sub_item_id' => 90
        ]);

        Nivel::create([
            'id' => 23,
            'descripcion' => <<<EOT
                NIVEL 3: La profesional diligencia el campo de ACCIONES TOMADAS de acuerdo con los siguientes lineamientos: 
                A. Indicar si se orientó a la mujer escribiendo el nombre de la institución y localidad por ejemplo: Comisaria de Familia de x localidad, Fiscalía, Casa de justicia de x localidad
                B. Debe mencionar para qué se orientó a esa institución. 
                C. Indicar textualmente si la mujer fue remitido/redireccionado su caso a alguna estrategia de la SDMujer además de registralo en el check list "a cuáles servicios se remite", por ejemplo: SE REMITE POR CORREO ELECTRÓNICO A LA CIOM de Keneddy e indicar para qué se redirecciono (atención sociojúridica, psicosocial u ambas).                                                          D. En dado caso únicamente se informen los datos de ubicación, contacto y horario de atención, especificarlo de la siguiente manera: SE ORIENTA CON LA CIO DE KENNEDY. 
                NOTA: En los formularios de FUERA DE BOGOTÁ Y ALERTANTES el campo de acciones tomadas debe incluir los literales mencionados anteriormente y además tener todos los lineamientos del campo de análisis de la llamada del nivel anterior "NIVEL 2: La profesional diligencia el campo de ANÁLISIS DE LA LLAMADA".	
            EOT,
            'sub_item_id' => 90
        ]);

        Nivel::create([
            'id' => 24,
            'descripcion' => <<<EOT
                NIVEL 4: La profesional diligencia en el campo de descripción del seguimiento:
                A. Diligenciar de acuerdo a los avances que referencia la mujer respecto a la orientación sobre la ruta de atención teniendo en cuenta la última llamada u/o orientación de la última estrategia.                                                            B. Escribir si existen nuevos hechos de violencia, además de los factores de riesgo detectados según  el anexo 6.
                C.Debe cumplir con los mismos lineamientos de los campos de NARRATIVA, ANÁLISIS DE LA LLAMADA Y ACCIONES TOMADAS mencionados anteriormente.	
            EOT,
            'sub_item_id' => 90
        ]);

        Nivel::create([
            'id' => 25,
            'descripcion' => <<<EOT
                NIVEL 5: La profesional diligencia en el campo de narrativa de la llamada de Otras Atenciones: Debe incluir la solicitud de la ciudadanía y la orientación brindada por parte de la profesional. 
                Recordar que este formulario no contiene atenciones y/o orientaciones de VBG, DSR o IVE.
                APLICA PARA EL FORMULARIO DE OTRAS ATENCIONES. 
                Recordar que este formulario no contiene atenciones y/o orientaciones de VBG ni DSR.
                APLICA PARA EL FORMULARIO DE OTRAS ATENCIONES. 	
            EOT,
            'sub_item_id' => 90
        ]);



        Nivel::create([
            'id' => 26,
            'descripcion' => <<<EOT
                NIVEL 1: Signos de puntuación en SIMISIONAL. 
            EOT,
            'sub_item_id' => 91
        ]);

        Nivel::create([
            'id' => 27,
            'descripcion' => <<<EOT
                NIVEL 2: Ortografía. La profesional debe escribir correctamente las palabras, sin omitir letras (Se afectará cuando hay tres errores en el mismo caso). 
            EOT,
            'sub_item_id' => 91
        ]);

        Nivel::create([
            'id' => 28,
            'descripcion' => <<<EOT
                NIVEL 3. Redacción y coherencia al momento de escribir, la idea debe ser clara, concisa y de fácil interpretación para la persona.  
            EOT,
            'sub_item_id' => 91
        ]);





        Nivel::create([
            'id' => 29,
            'descripcion' => <<<EOT
                NIVEL 1: La profesional no brinda información confidencial sobre la relación contractual entre SDMujer - ETB - IQ Outsourcing.   
            EOT,
            'sub_item_id' => 92
        ]);

        Nivel::create([
            'id' => 30,
            'descripcion' => <<<EOT
                NIVEL 2: La profesional no brinda información confidencial de funcionarias y funcionarios de la SDMujer, ETB o  IQ Outsourcing; como nombres, teléfonos y correos electrónicos.   
            EOT,
            'sub_item_id' => 92
        ]);

        Nivel::create([
            'id' => 31,
            'descripcion' => <<<EOT
                NIVEL 3: La profesional no brinda información confidencial referente a las atenciones realizadas a las mujeres que se comunican con la LPD a agresores o personas que lo soliciten.
                Nota: si se trata de un solicitud por parte de una Coordinadora de las diversas estrategias de la SDMujer, se pedirá que haga solicitud de la información a través de correo electrónico, para dejar trazabilidad de la misma. 

                En el caso de los alertantes se comuniquen, se debe informar que la mujer ya fue atendida más no brindar información al detalle de la situación de violencia y la orientación brindada. Se debe informar que para solicitud de información debe hacerlo por medio del correo electrónico en el caso de entidades como FGN, CTI, Juzgados o cualquier entidad distrital o estatal.   
            EOT,
            'sub_item_id' => 92
        ]);



        
        Nivel::create([
            'id' => 32,
            'descripcion' => <<<EOT
                NIVEL 1: La profesional no debe limitar a la persona a un tiempo definido o especifico para llevar a cabo el desarrollo de la atención.    
            EOT,
            'sub_item_id' => 93
        ]);



        Nivel::create([
            'id' => 33,
            'descripcion' => <<<EOT
                NIVEL 1: Toda atención en la cual se brinde espacio de escucha activa se debe culminar independientemente el tiempo que le tome a la profesional la culminación de la atención. 
                Si la llamada presenta alguna caida, se debe realizar OBLIGATORIAMENTE la devolución de la misma; en dicha gestión se deben realizar tres intentos y el último si no cuenta con resultado efectivo dejar un buzón de voz con los datos de la LPD.    
            EOT,
            'sub_item_id' => 94
        ]);



        Nivel::create([
            'id' => 34,
            'descripcion' => <<<EOT
                NIVEL 1: No se debe ofertar un servicio exclusivo por profesión, se debe tener en cuenta que el servicio que se brinda en la LPD es integral.    
            EOT,
            'sub_item_id' => 95
        ]);



        Nivel::create([
            'id' => 35,
            'descripcion' => <<<EOT
                NIVEL 1: Muestra empatía e interés por la narración de la mujer a través de sonidos o palabras que así lo evidencien ejemplo: “comprendo, claro, te escucho, si, ujum".    
            EOT,
            'sub_item_id' => 96
        ]);

        Nivel::create([
            'id' => 36,
            'descripcion' => <<<EOT
                NIVEL 2: La profesional propicia un ambiente de respeto, libre de cuestionamientos y juzgamientos.                     
            EOT,
            'sub_item_id' => 96
        ]);

        Nivel::create([
            'id' => 37,
            'descripcion' => <<<EOT
                NIVEL 3: Demuestra capacidad de parafrasear y así obtener claridad de lo que la mujer, el familiar o alertante comunica.     
            EOT,
            'sub_item_id' => 96
        ]);


        Nivel::create([
            'id' => 38,
            'descripcion' => <<<EOT
                NIVEL 1: La profesional usa un tono de voz y velocidad acorde a la interacción, su lenguaje es inclusivo, evita utilizar un lenguaje informal así como el uso de tecnicismos. Evitar utilizar frases y/o palabras informales o de la jerga común, teniendo en cuenta el servicio y atención que se brinda como entidad pública.
                La profesional debe vocalizar correctamente y mantener un ritmo de conversación adecuado y pausado para que la mujer comprenda la información brindada.     
            EOT,
            'sub_item_id' => 97
        ]);

        Nivel::create([
            'id' => 39,
            'descripcion' => <<<EOT
                NIVEL 2: No interrumpe a la persona de manera abrupta cuando expresa su caso, emociones, sentimientos, dudas o respuestas a preguntas realizadas por parte de la profesional en cualquier momento de la llamada. 
                Permita a la persona hablar, no la interrumpa con preguntas que probablemente ella en medio de su relato expresará, si no es así, realice las preguntas al final de la intervención de la persona.      
            EOT,
            'sub_item_id' => 97
        ]);

        Nivel::create([
            'id' => 40,
            'descripcion' => <<<EOT
                NIVEL 1: Realizar ejercicio de reconocimiento de los tipos de violencia contemplados en la Ley 1257 del 2008      
            EOT,
            'sub_item_id' => 98
        ]);

        Nivel::create([
            'id' => 41,
            'descripcion' => <<<EOT
                NIVEL 2: Identificar y explicar el ciclo de violencias, desnaturalización de las mismas y estereotipos de género.     
            EOT,
            'sub_item_id' => 98
        ]);

        Nivel::create([
            'id' => 42,
            'descripcion' => <<<EOT
                NIVEL 3. Implementar técnicas para el manejo del miedo, la culpa, la negación, desistimiento de la denuncia.       
            EOT,
            'sub_item_id' => 98
        ]);



        Nivel::create([
            'id' => 43,
            'descripcion' => <<<EOT
                NIVEL 1: En la conversación la profesional indaga sobre afectaciones emocionales y malestares psicológicos que se presentan ante la situación de violencia, se deben preguntar ¿Cómo esta?, ¿cómo se siente?, al finalizar la atención ¿cómo te sientes después de todo lo que hemos hablado?     
            EOT,
            'sub_item_id' => 99
        ]);

        Nivel::create([
            'id' => 44,
            'descripcion' => <<<EOT
                NIVEL 2: La profesional valida sentimientos, emociones, expresiones, etc.       
            EOT,
            'sub_item_id' => 99
        ]);

        Nivel::create([
            'id' => 45,
            'descripcion' => <<<EOT
                NIVEL 3: Brinda primeros auxilios psicológicos cuando la persona presente crisis, llanto fácil, etc., y diseña estrategia de estabilización emocional cuando se requiere.        
            EOT,
            'sub_item_id' => 99
        ]);



        Nivel::create([
            'id' => 46,
            'descripcion' => <<<EOT
                NIVEL 1: Realiza preguntas orientadoras acerca de la  situación de violencia, entorno, involucrados y tiempo en que se han venido desarrollando los hechos. 
                Dentro de este nivel se enmarcan las siguientes preguntas:
                Nombre del agresor(a). 
                Cédula del agresor(a). (Si lo conoce)
                Sexo del agresor(a)
                Edad del agresor(a)
                Ocupación del agresor(a)
                Dirección del agresor(a)  (Si lo conoce)
                Teléfono del agresor(a)(Si lo conoce)
                ¿El agresor(a) porta o no armas? (Tener presente que el arma puede ser cualquier objeto que atente la integridad física de la mujer).
                ¿Presenta consumo de alcohol u otras sustancias psicoactivas?
                ¿Tiene antecedentes penales?
                ¿Vinculado a proceso penal?
                Tipo de Relación
                ¿Ha tenido contacto nuevamente con el/la presunto/a agresor/a?                                                                     Nota: Se indagará con la mujer si conoce esa información, y de acuerdo a lo aportada por ella, los datos del agresor deben quedar diligenciados en el SIMISIONAL de manera correcta.        
            EOT,
            'sub_item_id' => 100
        ]);

        Nivel::create([
            'id' => 47,
            'descripcion' => <<<EOT
                NIVEL 2: Indaga por procesos jurídicos anteriores y medida de protección.        
            EOT,
            'sub_item_id' => 100
        ]);

        Nivel::create([
            'id' => 48,
            'descripcion' => <<<EOT
                NIVEL 1: Se identifica preguntas orientadas en conocer la red de apoyo de la mujer que consulta (familiar, institucional o comunitario). Tener presente que si la mujer en medio de su relato comenta frente a sus redes de apoyo no es necesario realizar la pregunta.        
            EOT,
            'sub_item_id' => 101
        ]);




        Nivel::create([
            'id' => 49,
            'descripcion' => <<<EOT
                NIVEL 1: Identifica uno o más factores de riesgo asociados en el anexo 6.        
            EOT,
            'sub_item_id' => 102
        ]);

        Nivel::create([
            'id' =>  50,
            'descripcion' => <<<EOT
                NIVEL 2: De acuerdo con lo identificado, analiza si la violencia ha exacervado en el tiempo y el continuum de violencias ha generado que el riesgo aumente lo cual permitirá identificar a qué equipo es más idoneo el redireccionamiento del caso.        
            EOT,
            'sub_item_id' => 102
        ]);

        Nivel::create([
            'id' => 51,
            'descripcion' => <<<EOT
                NIVEL 3: Identifica en medio del relato factores protectores asociados en el anexo 6.         
            EOT,
            'sub_item_id' => 102
        ]);

        Nivel::create([
            'id' => 52,
            'descripcion' => <<<EOT
                NIVEL 4: Diligencia el formulario "RIESGO DE FEMINICIDIO" en SIMISIONAL, dependiendo la situación de riesgo de la mujer. Por lo tanto los siguientes campos son de obligatorio diligenciamiento: 
                Situación de Riesgo.
                Nombre de Contacto/Familiar de la Mujer.
                Relación que tiene la mujer con el contacto.
                Teléfono de contacto.
                Dirección de contacto.         
            EOT,
            'sub_item_id' => 102
        ]);




        Nivel::create([
            'id' => 53,
            'descripcion' => <<<EOT
                NIVEL 1: Remite a la mujer hacia las estrategias de SDMujer, teniendo en cuenta la guía de direccionamiento  y la identificación del riesgo. Debe dar manejo a la expectativa de contacto de la estrategia además de validar si la mujer acepta la remisión o no (recuerde que se debe diligenciar en el checklist de análisis de la llamada si la mujer acepta la remisión o no, esto debe quedar también registrado en el campo de análisis de la llamada).         
            EOT,
            'sub_item_id' => 103
        ]);

        Nivel::create([
            'id' => 54,
            'descripcion' => <<<EOT
                NIVEL 2: Orienta a la mujer hacia las estrategias de SDMujer o servicios del distrito, informando datos de contacto, ubicación y horarios de atención         
            EOT,
            'sub_item_id' => 103
        ]);

        Nivel::create([
            'id' => 55,
            'descripcion' => <<<EOT
                NIVEL 3: Se identifica activación de rutas específicas (123 ) en una situación de emergencia.
                Nota: en caso de activación del  123, se realiza envió de correo de notificación a integracionlpd-123@sdmujer.gov.co de forma inmediata, que permita la gestión del caso correspondiente. 
                Nota: No deberá comprometerse ningún recurso, podrá expresarse por ejemplo que: Una vez hecha la activación, podriamos indicarle a las mujeres, que el caso ya esta siendo gestionado desde la Línea de emergencias 123 y que será desde la 123 que se activarán los recursos de acuerdo con el caso y la disponibilidad de los mismos         
            EOT,
            'sub_item_id' => 103
        ]);





        Nivel::create([
            'id' => 56,
            'descripcion' => <<<EOT
                NIVEL 1: Uso del marco legal de violencia contra las mujeres y mención de la ley 1257/2008 u otras relacionadas con la atención (leyes, resoluciones, sentencias, etc.) y orienta rutas de atención, garantía de derecho y acceso a la justicia         
            EOT,
            'sub_item_id' => 104
        ]);

        Nivel::create([
            'id' => 57,
            'descripcion' => <<<EOT
                NIVEL 2: Dependiendo del contenido de la llamada y fase en la que se encuentra en la ruta de atención, explica la medida de protección e incumplimiento de la misma.          
            EOT,
            'sub_item_id' => 104
        ]);

        Nivel::create([
            'id' => 58,
            'descripcion' => <<<EOT
                NIVEL 3: Acorde a la necesidad mencionada por la persona se direcciona a entidades acorde a la ruta de atención a mujeres víctimas de violencia. (Informar la entidad, dirección, teléfonos, página web y demás canales de atención incluyendo los horarios de atención).         
            EOT,
            'sub_item_id' => 104
        ]);





        Nivel::create([
            'id' => 59,
            'descripcion' => <<<EOT
                NIVEL 1: Debe indagar por los datos de la mujer víctima.
                NOTA: Si los datos son de una mujer que vive Fuera de Bogotá se debe realizar una única y primera atención direccionando a las entidades que le competen territorialmente.
                Los datos de la víctima deben quedar diligenciados en el formulario correspondiente.          
            EOT,
            'sub_item_id' => 105
        ]);

        Nivel::create([
            'id' => 60,
            'descripcion' => <<<EOT
                NIVEL 2: Brinda la orientación al alertante frente a la ruta de atención a víctimas de violencia.         
            EOT,
            'sub_item_id' => 105
        ]);

        Nivel::create([
            'id' => 61,
            'descripcion' => <<<EOT
                NIVEL 3: La profesional que recibe la llamada de un alertante que proporciona los datos de la mujer víctima debe generar la comunicación con ella. 
                Si la mujer no contesta la llamada se deberá dejar un mensaje de voz invitándola a comunicarse con la LPD.
                Nota: En dado caso de que no sea posible establecer la comunicación con la mujer víctima durante el turno, la profesional debe remitir los datos a la Supervisora en turno para que está asigne posteriormente otra profesional que efectué la atención y se agote los intentos de comunicación establecidos.         
            EOT,
            'sub_item_id' => 105
        ]);

        Nivel::create([
            'id' => 62,
            'descripcion' => <<<EOT
                NIVEL 4: La profesional que realiza la llamada debe registrar el resultado de la comunicación con la mujer víctima como seguimiento al alertante en SIMISIONAL. (Fallido o Efectivo).         
            EOT,
            'sub_item_id' => 105
        ]);




        Nivel::create([
            'id' => 63,
            'descripcion' => <<<EOT
                NIVEL 1: Revisar las atenciones previas en el módulo de la Línea Púrpura del SIMISIONAL, en el botón consultar, esto con el fin de contar con un contexto del proceso de atención previo y evitar situaciones de revictimización en el abordaje del caso, también se retoma esta información para poder identificar nuevas necesidades o la existencia de algún tipo de avances o barrera de acceso.         
            EOT,
            'sub_item_id' => 106
        ]);

        Nivel::create([
            'id' => 64,
            'descripcion' => <<<EOT
                NIVEL 2: Conocer el estado emocional de la mujer, así como avances y/o dificultades frente a la dinamización de la ruta de atención para mujeres víctimas de violencias.         
            EOT,
            'sub_item_id' => 106
        ]);

        Nivel::create([
            'id' => 65,
            'descripcion' => <<<EOT
                NIVEL 3: Contribuir al bienestar emocional, a la identificación del impacto de las violencias en la salud de las mujeres y el acompañamiento en la toma de decisiones.         
            EOT,
            'sub_item_id' => 106
        ]);

        Nivel::create([
            'id' => 66,
            'descripcion' => <<<EOT
                NIVEL 4: Desarrollar acciones para el acceso de las mujeres a la justicia a través de la orientación, canalización del caso para la dinamización de rutas con las diferentes instituciones competentes en la garantía del derecho a una vida libre de violencias; tener presente siempre los factores de riesgo asociados en el anexo 6.          
            EOT,
            'sub_item_id' => 106
        ]);

        Nivel::create([
            'id' => 67,
            'descripcion' => <<<EOT
                NIVEL 5: Promover el acceso de las mujeres a los servicios de salud plena, particularmente en casos donde se identifican barreras de acceso en la Interrupción Voluntaria del Embarazo - IVE.        
            EOT,
            'sub_item_id' => 106
        ]);

        Nivel::create([
            'id' => 68,
            'descripcion' => <<<EOT
                NIVEL 6: Se realizará el contacto con las mujeres a las que se identificó el riesgo, siempre que se haya verificado que no se han reportado atenciones por parte de los equipos y estrategias a las que se direccionó el caso y, por tanto, se desconoce el estado actual de la mujer (previa verificación del Simisional) y las dificultades que pudieron haberse presentado para que accediera a la atención y protección requerida; en dado caso, en SIMISIONAL registren atenciones por parte de la estrategia a la cual fue remitida con anterioridad por parte de LPD no se realizará el contacto puesto que los seguimientos los asumiran dicha estrategia, sin embargo se debe registrar como seguimiento un análisis de lo realizado por la estrategia (esto se marcará como seguimiento efectivo).        
            EOT,
            'sub_item_id' => 106
        ]);





        Nivel::create([
            'id' => 69,
            'descripcion' => <<<EOT
                NIVEL 1: La profesional usa las guías de LPD (Guía general del Servicio Línea Púrpura Distrital “Mujeres que escuchan mujeres, Anexo No 1. Guía para agentes de contacto inicial y agentes de atención psicosocial de la Línea Púrpura Distrital para atención a través del Canal telefónico 018000112137, Anexo No. 2 Guía para agentes de contacto inicial y agentes de atención psicosocial de la Línea Púrpura Distrital para atención a través del canal  WhatsApp), teniendo en cuenta las actualizaciones y retroalimentaciones generadas durante el proceso.        
            EOT,
            'sub_item_id' => 107
        ]);

        Nivel::create([
            'id' => 70,
            'descripcion' => <<<EOT
                NIVEL 2: La profesional usa los anexos y documentos complementarios a las guías        
            EOT,
            'sub_item_id' => 107
        ]);

        Nivel::create([
            'id' => 71,
            'descripcion' => <<<EOT
                NIVEL 3: La profesional usa las novedades, información y capacitaciones brindadas por la SDMujer o el Staff.         
            EOT,
            'sub_item_id' => 107
        ]);

    }
}
