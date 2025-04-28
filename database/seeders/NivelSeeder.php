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
        

// NIVELES O CARACTERIZACION ATENCION PSICOSOCIAL ERRORES NO CRITICOS
        Nivel::create([
            'id' => 1,
            'descripcion' => <<<EOT
                La profesional usa el guión: "Buen día, Línea Púrpura Distrital Mujeres que Escuchan Mujeres, ¿con quién tengo el gusto de hablar?" 	        
            EOT,
            'sub_item_id' => 94
        ]);

        Nivel::create([
            'id' => 2,
            'descripcion' => <<<EOT
                La profesional debe contestar la llamada antes de los 10 segundos, estar atenta al ingreso de las llamadas. 	        
            EOT,
            'sub_item_id' => 95
        ]);

        Nivel::create([
            'id' => 3,
            'descripcion' => <<<EOT
                Cuando la profesional le solicita a la mujer espera en línea, debe utilizar el "mute" según corresponda y retomar en los tiempos establecidos: Mute 90 segundos (1 minuto y 30 segundos). 	        
            EOT,
            'sub_item_id' => 96
        ]);

        Nivel::create([
            'id' => 4,
            'descripcion' => <<<EOT
                Para realizar alguna validación de información, la profesional debe indicarle a la mujer el motivo de la espera (Permíteme un momento en línea voy a validar la información, dame unos segundos para realizar la consulta) y una vez retome la conversación agradecer su tiempo en línea (¿Estas ahí?, ya volví, gracias por tu espera).	        
            EOT,
            'sub_item_id' => 97
        ]);

        Nivel::create([
            'id' => 5,
            'descripcion' => <<<EOT
                Al finalizar la llamada la profesional debe confirmar la claridad en la información suministrada y confirmar el proceso a seguir (Ejemplo: ¿La información brindada ha sido clara?, ¿Tiene alguna duda o inquietud del proceso a seguir?)	        
            EOT,
            'sub_item_id' => 98
        ]);

        Nivel::create([
            'id' => 6,
            'descripcion' => <<<EOT
                No es obligatorio mencionarlo textualmente pero si es obligatorio mencionar el lema "No estás sola", el horario de atención (24 horas los 7 días de la semana). 	        
            EOT,
            'sub_item_id' => 99
        ]);

        Nivel::create([
            'id' => 7,
            'descripcion' => <<<EOT
                "La profesional transfiere la llamada a la encuesta de satisfacción de forma correcta, informando a la mujer de la transferencia a la misma y realizando la gestión en el sistema Inconcert. Las llamadas que se excluyen de envío a encuesta de satisfacción son: Violencia Sexual, Dependencia Emocional, Crisis, Salud Mental y que han tenido problemas de conexión y caídas. Todos los seguimientos se deben enviar a encuesta de satisfacción."	
            EOT,
            'sub_item_id' => 100
        ]);

        Nivel::create([
            'id' => 8,
            'descripcion' => <<<EOT
                La profesional debe realizar el registro del ID de la llamada arrojado por inconcert, en el aplicativo del SIMISIONAL con el fin de tener la trazabilidad entre los dos sistemas.	        
            EOT,
            'sub_item_id' => 101
        ]);

        Nivel::create([
            'id' => 9,
            'descripcion' => <<<EOT
                La profesional debe tipificar la llamada de acuerdo con el resultado de la misma.

                • Requerimiento Simisional: Este tipificación se utiliza para todas las llamadas que son atendidas por el equipo profesional psicosocial y que son relacionadas con violencia de género, derechos sexuales y reproductivos, violencias institucionales, alertantes de víctimas de violencia, llamadas fuera de Bogotá que relatan violencia y a las cuales se les brinda la orientación, atenciones a las mujeres sobre sus derechos basados en el marco de la política pública. Se tipifican con esta opción los seguimientos, independientemente de que sean efectivos o fallidos, atenciones vinculadas con la estrategia de integración 123.  
                *Aplica para las llamadas entrantes o salientes.*

                • Ya fue atendida: Esta opción se debe utilizar cuando la mujer manifieste que ya recibió la orientación requerida por la LPD, no tiene dudas o inquietudes en el momento.  
                *Aplica para las llamadas entrantes o salientes.*

                • Volver a llamar: Se usa esta opción cuando la persona por x o y motivo solicita una nueva llamada. Ejemplo: alertante solicita llamada en 5 minutos ya que se encuentra con la víctima para brindar la atención.  
                *Aplica para las llamadas entrantes o salientes.*

                • Acosador: Utilizamos esta tipificación para las llamadas que nos ingresan de personas que usan la línea teniendo un lenguaje soez e intimidante.  
                • Equivocada: Se usa esta tipificación para los casos en donde tenemos contacto con alguna persona refiriendo equivocarse y es ella la que cuelga y/o finaliza la llamada.  
                *Aplica para llamadas entrantes y salientes.*

                • Broma: Cuando se comunican a la línea personas a realizar bromas.  
                • Otras atenciones: Son las llamadas que se presentan y que son ajenas a los derechos de las mujeres y/o misionalidad de la LPD; temas relacionados con COVID, empleabilidad, subsidios. También en esta opción se ingresan los temas asociados a ideación suicida, malestares emocionales, identidad de género, siempre y cuando no estén relacionados con Violencias contra las mujeres – VBG.  
                *Aplica para llamadas entrantes o salientes.*

                • Muda: Se usa en caso de que ingrese una llamada y no se escuche nada.  
                *Aplica para llamadas entrantes o salientes.*

                • Prueba: Se utiliza para las interacciones que ingresan o salen con el fin de verificar el correcto funcionamiento del aplicativo y/o diadema.  
                *Aplica para llamadas entrantes o salientes.*

                • Caída: Esta tipificación se usa para las llamadas que se cortan en medio de la atención. Es importante tener en cuenta que si es una atención efectiva (se brindan rutas de atención) pero varias veces se cae la llamada con la mujer, una de esas llamadas debe quedar tipificada como Requerimiento Simisional.  
                *Aplica para llamadas entrantes o salientes.*

                • No contesta: Se utiliza para las llamadas salientes donde el número de teléfono sí timbra pero no hay respuesta.

                • Correo de voz: Se utiliza para las llamadas salientes donde al marcar el número de teléfono, esta ingresa directo al buzón de mensajes.
            EOT,
            'sub_item_id' => 102
        ]);
// FIN NIVELES O CARACTERIZACION ATENCION PSICOSOCIAL ERRORES NO CRITICOS






// NIVELES O CARACTERIZACION ATENCION PSICOSOCIAL ERRORES CRITICOS
        Nivel::create([
            'id' => 10,
            'descripcion' => <<<EOT
                NIVEL 1: La profesional debe evitar dejar tiempo prolongado a la mujer en espera ocasionando que esta finalice la llamada.        
            EOT,
            'sub_item_id' => 103
        ]);

        Nivel::create([
            'id' => 11,
            'descripcion' => <<<EOT
                NIVEL 2: La profesional simula tener fallas en el sistema para incentivar el cuelgue de la llamada.        
            EOT,
            'sub_item_id' => 103
        ]);

        Nivel::create([
            'id' => 12,
            'descripcion' => <<<EOT
                NIVEL 3: La profesional motiva realizar el cuelgue de la llamada sin haber solucionado el requerimiento de la mujer.        
            EOT,
            'sub_item_id' => 103
        ]);




        Nivel::create([
            'id' => 13,
            'descripcion' => <<<EOT
                NIVEL 1: La profesional indaga con la mujer si desea brindar y guardar sus datos en el sistema de información de la SDMujer.        
            EOT,
            'sub_item_id' => 104
        ]);

        Nivel::create([
            'id' => 14,
            'descripcion' => <<<EOT
                NIVEL 2: Lectura del conocimiento informado.       
            EOT,
            'sub_item_id' => 104
        ]);

        Nivel::create([
            'id' => 15,
            'descripcion' => <<<EOT
                NIVEL 3: La profesional informa a la mujer sobre el objetivo de la toma de datos a fin de evitar situaciones de revictimización cuando se comunique en futuras ocasiones con LPD a partir del registro de datos en el SIMISIONAL.        
            EOT,
            'sub_item_id' => 104
        ]);

        Nivel::create([
            'id' => 16,
            'descripcion' => <<<EOT
                NIVEL 4: La profesional debe consultar el caso de forma completa en el SIMISIONAL si la mujer se ha comunicado con anterioridad y lo informado por anteriores profesionales de LPD o otras estrategias de la SDMujer evitando acciones con daño y situaciones de  revictimización de las mujeres. (Debe solicitar el tiempo en espera para realizar la respectiva validación, lectura del caso y a partir de lo registrado en SIMISIONAL dar continuidad a la orientación solicitada por la mujer).        
            EOT,
            'sub_item_id' => 104
        ]);







        Nivel::create([
            'id' => 17,
            'descripcion' => <<<EOT
                NIVEL 1: La profesional registra la atención en el formulario correcto del sistema de información SIMISIONAL (dependiendo el formulario que aplique: Bogotá, Fuera de Bogotá, Alertantes, Seguimientos, Otras Atenciones y Contacto Inicial Fallido).        
            EOT,
            'sub_item_id' => 105
        ]);

        Nivel::create([
            'id' => 18,
            'descripcion' => <<<EOT
                NIVEL 2: La profesional registra la atención el mismo día en que recibe la llamada o máximo al día siguiente solo en caso de tener turno de la madrugada.      
            EOT,
            'sub_item_id' => 105
        ]);




        Nivel::create([
            'id' => 19,
            'descripcion' => <<<EOT
                NIVEL 1: La profesional diligencia los datos sociodemográficos en los casos que aplique:
                SI ES UNA LLAMADA DE BOGOTÁ
                Nombre completo. (si no desea brindarlo colocar ANÓNIMO).  
                Tipo de documento.  
                Número de documento.  
                Fecha de nacimiento.  
                Teléfono Móvil o Fijo.  
                Correo Electrónico  
                Edad  
                Dirección y Ubicación  
                Sexo  
                Localidad  
                Tipo de discapacidad  
                Identidad de Género  
                País de nacimiento  
                Orientación Sexual  
                Grupo étnico  
                Estado Civil  
                Escolaridad  
                Ocupación  

                SI ES UNA LLAMADA FUERA DE BOGOTÁ
                Nombre (si no brinda información se registra como ANÓNIMO).  
                Apellido  
                Tipo de identificación  
                Número de identificación  
                Teléfono Móvil o Fijo  
                Localidad  
                Dirección  
                Correo Electrónico  

                SI ES UNA LLAMADA ALERTANTE
                Nombre (si no brinda información se registra como ANÓNIMO).  
                Apellido  
                Tipo de identificación  
                Número de identificación  
                Teléfono Móvil o Fijo  
                Localidad  
                Dirección  
                Correo Electrónico  

                SI ES UNA LLAMADA OTRAS ATENCIONES
                Nombre (si no brinda información se registra como ANÓNIMO).  
                Apellido  
                Tipo de identificación  
                Número de identificación  
                Teléfono Móvil o Fijo  
                Localidad  
                Dirección  
                Correo Electrónico  

                SI ES UNA LLAMADA DE SEGUIMIENTO
                Confirmar o actualizar los siguientes datos:  
                Dirección  
                Localidad  
                Teléfono  

                SI ES UNA LLAMADA DE CONTACTO INICIAL FALLIDO
                Nombre completo (si lo proporcionan)  
                Tipo de documento (si lo proporcionan)  
                Número de documento (si lo proporcionan)  
                Teléfono  
                Y todos los datos sociodemográficos que proporcionen de la mujer en la solicitud (Chat violencias, Correo, Agencia MUJ, solicitudes Sdmujer)

                Nota: Si al hacer la revisión en el SIMISIONAL hacen falta otros datos, se deberán solicitar y actualizar.
            EOT,
            'sub_item_id' => 106
        ]);

        Nivel::create([
            'id' => 20,
            'descripcion' => <<<EOT
                NIVEL 2: La profesional diligencia los datos referentes a la atención realizada en el momento que aplique:

                SI ES UNA LLAMADA DE BOGOTÁ:
                • Tipo violencia  
                • Ámbito ocurrencia  
                • ¿Ha tenido contacto nuevamente con el (la) presunto(a) agresor(a)?  
                • ¿Con qué frecuencia?  
                • ¿Ha denunciado?  
                • ¿Dónde hizo la denuncia?  
                • ¿Cuándo hizo la denuncia?  
                • ¿Cuenta con medida de protección?  
                • Número de denuncia  
                • Número de medida de caución  
                • ¿El (la) agresor(a) ha incumplido la medida de protección?  
                • Fecha llamada  
                • Hora inicio  
                • Hora fin  
                • ¿Cómo se enteró de la línea?  
                • Medio de contacto  
                • ID nombre grabación  
                • ID nombre adicional grabación  
                • Intervención  
                • Motivo de atención  
                • ¿Refiere a un riesgo feminicidio?  
                • ¿Refiere ser víctima de violencia?  
                • ¿Refiere que se le han presentado barreras institucionales?  

                SI ES UNA LLAMADA DE FUERA DE BOGOTÁ:
                • Tipo violencia  
                • Ámbito ocurrencia  
                • ¿Ha tenido contacto nuevamente con el (la) presunto(a) agresor(a)?  
                • ¿Con qué frecuencia?  
                • ¿Ha denunciado?  
                • ¿Dónde hizo la denuncia?  
                • ¿Cuándo hizo la denuncia?  
                • ¿Cuenta con medida de protección?  
                • ¿El (la) agresor(a) ha incumplido la medida de protección?  
                • Llamó para solicitar …  
                • Motivo de atención  
                • Fecha llamada  
                • Hora inicio  
                • Hora fin  
                • ¿Cómo se enteró de la línea?  
                • Departamento de la llamada  
                • Ciudad de la llamada  
                • ID nombre grabación  
                • ID nombre adicional grabación  
                • Narrativa de la llamada  
                • Análisis y acciones  
                • ¿Refiere a un riesgo feminicidio?  
                • ¿Refiere ser víctima de violencia?  
                • ¿Refiere que se le han presentado barreras institucionales?  

                SI ES UNA LLAMADA DE ALERTANTES:
                • Fecha de la llamada  
                • Hora inicio  
                • Hora fin  
                • ¿Cómo se enteró de la línea?  
                • ID nombre grabación  
                • ID nombre grabación adicional  
                • Narrativa de la llamada  
                • Acciones tomadas  
                • Motivo de llamada  
                • Nombre completo víctima  
                • Número de contacto principal  
                • Número de contacto adicional  
                • Sexo  
                • Relación con la mujer  
                • Descripción de la relación  

                SI ES UNA LLAMADA DE OTRAS CONSULTAS (OTRAS ATENCIONES):
                • Fecha de la interacción  
                • Hora inicio  
                • Hora fin  
                • Medio de contacto  
                • Nombre grabación – ID  
                • Narrativa de la llamada  
                • ¿Se transfiere al equipo de atención psicosocial?  

                SI ES UNA LLAMADA DE SEGUIMIENTOS:
                • Tipo de seguimiento  
                • Nombre grabación  
                • Fecha del seguimiento  
                • Hora inicio  
                • Hora fin  
                • Origen de llamada  
                • Medio de contacto  
                • Descripción seguimiento  
                • ¿Refiere a un riesgo feminicidio?  
                • ¿Refiere ser víctima de violencia?  
                • ¿Refiere que se le han presentado barreras institucionales?  

                SI ES UNA LLAMADA DE CONTACTO INICIAL FALLIDO:
                • Tipo de contacto (Solo comunicación telefónica)	
            EOT,
            'sub_item_id' => 106
        ]);

        Nivel::create([
            'id' => 21,
            'descripcion' => <<<EOT
                NIVEL 3 La profesional diligencia las preguntas que se encuentran en los botones de violencias y Barreras de acceso en los casos que corresponda.  
            EOT,
            'sub_item_id' => 106
        ]);


        Nivel::create([
            'id' => 22,
            'descripcion' => <<<EOT
                "NIVEL 1: La profesional diligencia el campo de NARRATIVA DE LA LLAMADA de acuerdo con los siguientes lineamientos: 
                A. Se debe diligenciar fiel a lo que indica la mujer cuando relata el hecho de violencia, teniendo en cuenta: ¿Qué paso?, ¿Cómo?, ¿Quién?, ¿Cuándo? y ¿Dónde? 
                B. Se redacta entre comillas en primera persona. 
                C. Al inicio debe especificar el canal de ingreso de la solicitud de atención y si viene remitido por alguna estrategia.
                APLICA PARA LOS FORMULARIOS DE BOGOTÁ, FUERA DE BOGOTÁ Y ALERTANTES."	
            EOT,
            'sub_item_id' => 107
        ]);

        Nivel::create([
            'id' => 23,
            'descripcion' => <<<EOT
                "NIVEL 2: La profesional diligencia el campo de ANÁLISIS DE LA LLAMADA de acuerdo con los siguientes lineamientos:
                A. Víctima o Alertante que se comunica desde (incluir Bogotá o lugar desde dónde se encuentra ubicado), o si fue remitido por alguna institución u equipo/estrategia de la entidad.
                B. Descripción de la situación, indicando: qué  y cómo ocurrió, a qué tipo de delito o violencia corresponde y quién es el presunto agresor.
                C. Ocurrencia, si es una fecha exacta incluirla o el periodo de tiempo en que han ocurrido los hechos; corresponde a cuándo y dónde ocurrieron los hechos. 
                D. Acciones a la fecha, incluir hasta la fecha si ha iniciado acciones con la Secretaría o con alguna otra institución.
                E. Otros factores, asociados al ámbito de ocurrencia, la relación entre la víctima y el agresor, la edad de la víctima, si se requiere atención en salud, y si es requerido el acompañamiento psicosocial y si hay una característica diferencial relevante describir en el análisis si esta es relevante para la atención, ya sea porque es determinante en los hechos, los riesgos, las circunstancias modificadoras.
                F. La organización del relato debe reflejar los factores de riesgo y factores protectores identificados durante la atención teniendo en cuenta el anexo 6.                                   
                G. Apreciaciones de la profesional: es todo aquello que se identificó durante la atención que no se encuentra dentro de las categorías de selección tales como:  si había dificultades de la mujer para continuar con la conversación, si su relato manejaba o no línea de tiempo, si mencionó algún tipo de diagnóstico en salud mental, impactos emocionales, relacionales, físicos y/o económicos producto de las violencias, redes de apoyo, entre otras, que se considere porque implica realizar ajustes razonables en la atención para hacer la misma accesible para quien consulta y será  importante para continuar con la atención. 

                Se redacta en tercera persona en tiempo pasado. Se analiza la situación de violencias y se plantean los compromisos, recomendaciones, o acuerdos generados para la finalización de la llamada en caso de que aplique. Se sugiere separar la información por puntos para dar mayor claridad, y en cada aspecto iniciar con el título de la información a registrar.

                En el checklist, debe estar selecionada la opción ""Se autoriza remisión a otras estrategias SDMujer"" de manera obligatoria si se envía remisión a la estrategia ofertada."	
                    
            EOT,
            'sub_item_id' => 107
        ]);

        Nivel::create([
            'id' => 24,
            'descripcion' => <<<EOT
                "NIVEL 3: La profesional diligencia el campo de ACCIONES TOMADAS de acuerdo con los siguientes lineamientos: 
                A. Indicar si se orientó a la mujer escribiendo el nombre de la institución y localidad como: Comisaria de Familia de x localidad, Fiscalía, Casa de justicia de x localidad.
                B. Debe mencionar para qué se direcciona a esa institución. 
                C. Indicar textualmente si la mujer fue remitida a alguna estrategia de la SDMujer además de registralo en el check list ""a cuáles servicios se remite"", por ejemplo: SE REMITE POR CORREO ELECTRÓNICO A LA CIOM de Keneddy e indicar para qué se redirecciono (atención sociojúridica, psicosocial u ambas).                                                                                                      D. En dado caso únicamente se informen los datos de ubicación, contacto y horario de atención, especificarlo de la siguiente manera: SE ORIENTA CON LA CIO DE KENNEDY. 
                F. En los casos que se realicen denuncias de oficio se dejará en este espacio registrado el número que genera la página de la FGN al finalizar el proceso.
                NOTA: En los formularios de FUERA DE BOGOTÁ Y ALERTANTES el campo de acciones tomadas debe incluir los literales mencionados anteriormente y además tener todos los lineamientos del campo de análisis de la llamada del nivel anterior ""NIVEL 2: La profesional diligencia el campo de ANÁLISIS DE LA LLAMADA""."	
            EOT,
            'sub_item_id' => 107
        ]);

        Nivel::create([
            'id' => 25,
            'descripcion' => <<<EOT
                "NIVEL 4: La profesional diligencia en el campo de descripción del seguimiento:
                A. Diligenciar de acuerdo a los avances que referencia la mujer respecto a la orientación sobre la ruta de atención teniendo en cuenta la última llamada u/o orientación de la última estrategia.                                                                                                                                                                                                                               B. Escribir si existen nuevos hechos de violencia, además de los factores de riesgo detectados según  el anexo 6.
                C.Debe cumplir con los mismos lineamientos de los campos de NARRATIVA, ANÁLISIS DE LA LLAMADA Y ACCIONES TOMADAS mencionados anteriormente."	

            EOT,
            'sub_item_id' => 107
        ]);

        Nivel::create([
            'id' => 26,
            'descripcion' => <<<EOT
                "NIVEL 5: La profesional diligencia en el campo de narrativa de la llamada de Otras Atenciones: Debe incluir la solicitud de la ciudadanía y la orientación brindada por parte de la profesional. 
                Recordar que este formulario no contiene atenciones y/o orientaciones de VBG, DSR o IVE.
                APLICA PARA EL FORMULARIO DE OTRAS ATENCIONES. 

                Recordar que este formulario no contiene atenciones y/o orientaciones de VBG ni DSR.

                APLICA PARA EL FORMULARIO DE OTRAS ATENCIONES. "	

            EOT,
            'sub_item_id' => 107
        ]);

        Nivel::create([
            'id' => 27,
            'descripcion' => <<<EOT
                NIVEL 6: La profesional diligencia los campos: Nombre de la Atención relacionada y descripción de la gestión: se debe registrar con los guiones establecidos, además la gestión de la profesional, intentos de llamada con número de ID. (Contacto Inicial Fallido)		

            EOT,
            'sub_item_id' => 107
        ]);




        Nivel::create([
            'id' => 28,
            'descripcion' => <<<EOT
                NIVEL 1: Signos de puntuación en SIMISIONAL. 
            EOT,
            'sub_item_id' => 108
        ]);

        Nivel::create([
            'id' => 29,
            'descripcion' => <<<EOT
                NIVEL 2: Ortografía. La profesional debe escribir correctamente las palabras, sin omitir letras (Se afectará cuando hay tres errores en el mismo caso). 
            EOT,
            'sub_item_id' => 108
        ]);

        Nivel::create([
            'id' => 30,
            'descripcion' => <<<EOT
                NIVEL 3. Redacción y coherencia al momento de escribir, la idea debe ser clara, concisa y de fácil interpretación para la persona.  
            EOT,
            'sub_item_id' => 108
        ]);





        Nivel::create([
            'id' => 31,
            'descripcion' => <<<EOT
                NIVEL 1: La profesional no brinda información confidencial sobre la relación contractual entre SDMujer - ETB - IQ Outsourcing.   
            EOT,
            'sub_item_id' => 109
        ]);

        Nivel::create([
            'id' => 32,
            'descripcion' => <<<EOT
                NIVEL 2: La profesional no brinda información confidencial de funcionarias y funcionarios de la SDMujer, ETB o  IQ Outsourcing; como nombres, teléfonos y correos electrónicos.   
            EOT,
            'sub_item_id' => 109
        ]);

        Nivel::create([
            'id' => 33,
            'descripcion' => <<<EOT
                "NIVEL 3: La profesional no brinda información confidencial referente a las atenciones realizadas a las mujeres que se comunican con la LPD a agresores o personas que lo soliciten.
                Nota: si se trata de un solicitud por parte de una Coordinadora de las diversas estrategias de la SDMujer, se pedirá que haga solicitud de la información a través de correo electrónico, para dejar trazabilidad de la misma. 

                En el caso de los alertantes se comuniquen, se debe informar que la mujer ya fue atendida más no brindar información al detalle de la situación de violencia y la orientación brindada. Se debe informar que para solicitud de información debe hacerlo por medio del correo electrónico en el caso de entidades como FGN, CTI, Juzgados o cualquier entidad distrital o estatal."	
            EOT,
            'sub_item_id' => 109
        ]);




        
        Nivel::create([
            'id' => 34,
            'descripcion' => <<<EOT
                NIVEL 1: La profesional no debe limitar a la persona a un tiempo definido o especifico para llevar a cabo el desarrollo de la atención.    
            EOT,
            'sub_item_id' => 110
        ]);




        Nivel::create([
            'id' => 35,
            'descripcion' => <<<EOT
                "NIVEL 1: Toda atención en la cual se brinde espacio de escucha activa se debe culminar independientemente el tiempo que le tome a la profesional la culminación de la atención. 
                Si la llamada presenta alguna caida, se debe realizar OBLIGATORIAMENTE la devolución de la misma; en dicha gestión se deben realizar tres intentos y el último si no cuenta con resultado efectivo dejar un buzón de voz con los datos de la LPD."	
                
            EOT,
            'sub_item_id' => 111
        ]);



        Nivel::create([
            'id' => 36,
            'descripcion' => <<<EOT
                NIVEL 1: No se debe ofertar un servicio exclusivo por profesión, se debe tener en cuenta que el servicio que se brinda en la LPD es integral.	   
            EOT,
            'sub_item_id' => 112
        ]);



        Nivel::create([
            'id' => 37,
            'descripcion' => <<<EOT
                NIVEL 1: Muestra empatía e interés por la narración de la mujer a través de sonidos o palabras que así lo evidencien ejemplo: “comprendo, claro, te escucho, si, ujum".	    
            EOT,
            'sub_item_id' => 113
        ]);

        Nivel::create([
            'id' => 38,
            'descripcion' => <<<EOT
                NIVEL 2: La profesional propicia un ambiente de respeto, libre de cuestionamientos y juzgamientos.                 	                     
            EOT,
            'sub_item_id' => 113
        ]);

        Nivel::create([
            'id' => 39,
            'descripcion' => <<<EOT
                NIVEL 3: Demuestra capacidad de parafrasear y así obtener claridad de lo que la mujer, el familiar o alertante comunica. 	     
            EOT,
            'sub_item_id' => 113
        ]);




        Nivel::create([
            'id' => 40,
            'descripcion' => <<<EOT
                "NIVEL 1: La profesional usa un tono de voz y velocidad acorde a la interacción, su lenguaje es inclusivo, evita utilizar un lenguaje informal así como el uso de tecnicismos. Evitar utilizar frases y/o palabras informales o de la jerga común, teniendo en cuenta el servicio y atención que se brinda como entidad pública.
                La profesional debe vocalizar correctamente y mantener un ritmo de conversación adecuado y pausado para que la mujer comprenda la información brindada."	
            EOT,
            'sub_item_id' => 114
        ]);

        Nivel::create([
            'id' => 41,
            'descripcion' => <<<EOT
                "NIVEL 2: No interrumpe a la persona de manera abrupta cuando expresa su caso, emociones, sentimientos, dudas o respuestas a preguntas realizadas por parte de la profesional en cualquier momento de la llamada. 
                Permita a la persona hablar, no la interrumpa con preguntas que probablemente ella en medio de su relato expresará, si no es así, realice las preguntas al final de la intervención de la persona. "	

            EOT,
            'sub_item_id' => 114
        ]);




        Nivel::create([
            'id' => 42,
            'descripcion' => <<<EOT
                NIVEL 1: Realizar ejercicio de reconocimiento de los tipos de violencia contemplados en la Ley 1257 del 2008	      
            EOT,
            'sub_item_id' => 115
        ]);

        Nivel::create([
            'id' => 43,
            'descripcion' => <<<EOT
                NIVEL 2: Identificar y explicar el ciclo de violencias, desnaturalización de las mismas y estereotipos de género.	     
            EOT,
            'sub_item_id' => 115
        ]);

        Nivel::create([
            'id' => 44,
            'descripcion' => <<<EOT
                NIVEL 3. Implementar técnicas para el manejo del miedo, la culpa, la negación, desistimiento de la denuncia. 	      
            EOT,
            'sub_item_id' => 115
        ]);




        Nivel::create([
            'id' => 45,
            'descripcion' => <<<EOT
                NIVEL 1: En la conversación la profesional indaga sobre afectaciones emocionales y malestares psicológicos que se presentan ante la situación de violencia, se deben preguntar ¿Cómo esta?, ¿cómo se siente?, al finalizar la atención ¿cómo te sientes después de todo lo que hemos hablado?	   
            EOT,
            'sub_item_id' => 116
        ]);

        Nivel::create([
            'id' => 46,
            'descripcion' => <<<EOT
                NIVEL 2: La profesional valida sentimientos, emociones, expresiones, etc.	     
            EOT,
            'sub_item_id' => 116
        ]);

        Nivel::create([
            'id' => 47,
            'descripcion' => <<<EOT
                NIVEL 3: Brinda primeros auxilios psicológicos cuando la persona presente crisis, llanto fácil, etc., y diseña estrategia de estabilización emocional cuando se requiere. 	        
            EOT,
            'sub_item_id' => 116
        ]);



        Nivel::create([
            'id' => 48,
            'descripcion' => <<<EOT
                "NIVEL 1: Dentro de este nivel se enmarcan las siguientes preguntas, con respecto a los datos del agresor (a):

                Nombres del agresor(a). 
                Apellidos del agresor(a). 
                Número del documento de identidad
                Telefono fijo y/o Movil 
                Correo electrónico 
                Dirección Domicilio 
                Fecha de nacimiento
                Tipo de persona

                Nota: La profesional debe Crear y Asociar al agresor, con los datos anteriormente mencionados o los indicados por la mujer. "	
        
            EOT,
            'sub_item_id' => 117
        ]);

        Nivel::create([
            'id' => 49,
            'descripcion' => <<<EOT
                NIVEL 2: Realiza preguntas orientadoras acerca de la situación de violencia, entorno, involucrados y tiempo en que se han venido desarrollando los hechos. Indaga por procesos jurídicos anteriores y medida de protección. 	       
            EOT,
            'sub_item_id' => 117
        ]);




        Nivel::create([
            'id' => 50,
            'descripcion' => <<<EOT
                NIVEL 1: Se identifica preguntas orientadas en conocer la red de apoyo de la mujer que consulta (familiar, institucional o comunitario). Tener presente que si la mujer en medio de su relato comenta frente a sus redes de apoyo no es necesario realizar la pregunta.	        
            EOT,
            'sub_item_id' => 118
        ]);





        Nivel::create([
            'id' => 51,
            'descripcion' => <<<EOT
                NIVEL 1: Identifica uno o más factores de riesgo asociados en el anexo 6.	        
            EOT,
            'sub_item_id' => 119
        ]);

        Nivel::create([
            'id' =>  52,
            'descripcion' => <<<EOT
                NIVEL 2: Identifica en medio del relato factores protectores asociados en el anexo 6.      	        
            EOT,
            'sub_item_id' => 119
        ]);

        Nivel::create([
            'id' => 53,
            'descripcion' => <<<EOT
                NIVEL 3: La profesional diligencia las preguntas que se encuentran en el botón de Riesgo de Feminicidio.        
            EOT,
            'sub_item_id' => 119
        ]);

        Nivel::create([
            'id' => 54,
            'descripcion' => <<<EOT
                "NIVEL 4: La profesional crea y asocia el acompañamiento al evidenciar “RIESGO DE FEMINICIDIO"" en SIMISIONAL, teniendo en cuenta la situación de riesgo de la mujer. Por lo tanto, los siguientes campos son de obligatorio diligenciamiento: 
                Nombres                                                                   
                Apellidos 
                Número de documento de identidad              
                Teléfono fijo - móvil.
                Correo electrónico.
                Dirección de domicilio.
                Fecha de nacimiento.
                Tipo de persona. "	
                        
            EOT,
            'sub_item_id' => 119
        ]);





        Nivel::create([
            'id' => 55,
            'descripcion' => <<<EOT
                NIVEL 1: Remite a la mujer hacia las estrategias de SDMujer, teniendo en cuenta la guía de direccionamiento y la identificación del riesgo. Debe dar manejo a la expectativa de contacto de la estrategia además de validar si la mujer acepta la remisión o no (recuerde que se debe diligenciar en el checklist de análisis de la llamada si la mujer acepta la remisión o no, esto debe quedar también registrado en el campo de análisis de la llamada). El correo de la remisión debe estar escrito de manera correcta garantizando que llegue a las profesionales correspondientes teniendo en cuenta la última vigencia del anexo 4.  La remisión se debe realizar el mismo día de la atención dentro de las 8 horas laborales. 	         
            EOT,
            'sub_item_id' => 120
        ]);

        Nivel::create([
            'id' => 56,
            'descripcion' => <<<EOT
                NIVEL 2:  Orienta a la mujer hacia las estrategias de SDMujer o servicios del distrito, informando datos de contacto, ubicación y horarios de atención.	         
            EOT,
            'sub_item_id' => 120
        ]);

        Nivel::create([
            'id' => 57,
            'descripcion' => <<<EOT
                "NIVEL 3: Se identifica activación de rutas específicas (123 ) en una situación de emergencia.
                Nota: en caso de activación del  123, se realiza envió de correo de notificación a integracionlpd-123@sdmujer.gov.co de forma inmediata, que permita la gestión del caso correspondiente. 
                Nota: No deberá comprometerse ningún recurso, podrá expresarse por ejemplo que:  “El caso ya esta siendo gestionado desde la Línea de emergencias 123 y que será desde la 123 que se activarán los recursos de acuerdo con el caso y la disponibilidad de los mismos”"	
            EOT,
            'sub_item_id' => 120
        ]);

        Nivel::create([
            'id' => 58,
            'descripcion' => <<<EOT
                NIVEL 4 La profesional realiza el reporte teniendo en cuenta el relato del caso a la entidad correspondiente, según corresponda ICBF, SISVECOS, Duplas de Cundinamarca, Personería u otras Secretarías  de acuerdo a la competencia institucional y territorial (Adjunto el soporte en el Simisional según corresponda).	
            EOT,
            'sub_item_id' => 120
        ]);






        Nivel::create([
            'id' => 59,
            'descripcion' => <<<EOT
                NIVEL 1: Uso del marco legal de violencia contra las mujeres y mención de la ley 1257/2008 u otras relacionadas con la atención (leyes, resoluciones, sentencias, etc.) y orienta rutas de atención, garantía de derecho y acceso a la justicia.         
            EOT,
            'sub_item_id' => 121
        ]);

        Nivel::create([
            'id' => 60,
            'descripcion' => <<<EOT
                NIVEL 2: Dependiendo del contenido de la llamada y fase en la que se encuentra en la ruta de atención, explica la medida de protección e incumplimiento de la misma. 	          
            EOT,
            'sub_item_id' => 121
        ]);

        Nivel::create([
            'id' => 61,
            'descripcion' => <<<EOT
                NIVEL 3: Acorde a la necesidad mencionada por la persona se direcciona a entidades acorde a la ruta de atención a mujeres víctimas de violencia. (Informar la entidad, dirección, teléfonos, página web y demás canales de atención incluyendo los horarios de atención).	        
            EOT,
            'sub_item_id' => 121
        ]);






        Nivel::create([
            'id' => 62,
            'descripcion' => <<<EOT
                "NIVEL 1: Debe indagar por los datos de la mujer víctima.
                NOTA: Si los datos son de una mujer que vive Fuera de Bogotá se debe realizar una única y primera atención direccionando a las entidades que le competen territorialmente.
                Los datos de la víctima deben quedar diligenciados en el formulario correspondiente. "	
            EOT,
            'sub_item_id' => 122
        ]);

        Nivel::create([
            'id' => 63,
            'descripcion' => <<<EOT
                NIVEL 2: Brinda la orientación al alertante frente a la ruta de atención a víctimas de violencia.	         
            EOT,
            'sub_item_id' => 122
        ]);

        Nivel::create([
            'id' => 64,
            'descripcion' => <<<EOT
                "NIVEL 3: La profesional que recibe la llamada de un alertante que proporciona los datos de la mujer víctima debe generar la comunicación con ella. 

                Si la mujer no contesta la llamada se deberá dejar un mensaje de voz invitándola a comunicarse con la LPD.

                Nota: En dado caso de que no sea posible establecer la comunicación con la mujer víctima durante el turno, la profesional debe remitir los datos a la Supervisora en turno para que está asigne posteriormente otra profesional que efectué la atención y se agote los intentos de comunicación establecidos."	
            EOT,
            'sub_item_id' => 122
        ]);

        Nivel::create([
            'id' => 65,
            'descripcion' => <<<EOT
                NIVEL 4: La profesional que realiza la llamada : 1. En caso de comunicación efectiva, debe  asociar al alertante con la víctima. 2. En caso de comunicación fallida se debe crear el formulario de Contacto inicial Fallido con los datos de la mujer y un seguimiento fallido al alertante. 	         
            EOT,
            'sub_item_id' => 122
        ]);





        Nivel::create([
            'id' => 66,
            'descripcion' => <<<EOT
                NIVEL 1: Revisar las atenciones previas en el módulo de la Línea Púrpura del SIMISIONAL, esto con el fin de contar con un contexto del proceso de atención previo y evitar situaciones de revictimización en el abordaje del caso, también se retoma esta información para poder identificar nuevas necesidades o la existencia de algún tipo de avances o barrera de acceso. 	         
            EOT,
            'sub_item_id' => 123
        ]);

        Nivel::create([
            'id' => 67,
            'descripcion' => <<<EOT
                NIVEL 2: Conocer el estado emocional de la mujer, así como avances y/o dificultades frente a la dinamización de la ruta de atención para mujeres víctimas de violencias.	         
            EOT,
            'sub_item_id' => 123
        ]);

        Nivel::create([
            'id' => 68,
            'descripcion' => <<<EOT
                NIVEL 3: Contribuir al bienestar emocional, a la identificación del impacto de las violencias en la salud de las mujeres y el acompañamiento en la toma de decisiones.	         
            EOT,
            'sub_item_id' => 123
        ]);

        Nivel::create([
            'id' => 69,
            'descripcion' => <<<EOT
                NIVEL 4: Desarrollar acciones para el acceso de las mujeres a la justicia a través de la orientación, canalización del caso para la dinamización de rutas con las diferentes instituciones competentes en la garantía del derecho a una vida libre de violencias; tener presente siempre los factores de riesgo asociados en el anexo 6. Según el nivel de riesgo de la mujer realizar la denuncia de oficio por medio de la plataforma Denuncia Fácil de la FGN. 	          
            EOT,
            'sub_item_id' => 123
        ]);

        Nivel::create([
            'id' => 70,
            'descripcion' => <<<EOT
                NIVEL 5: Promover el acceso de las mujeres a los servicios de salud plena, particularmente en casos donde se identifican barreras de acceso en la Interrupción Voluntaria del Embarazo - IVE.	        
            EOT,
            'sub_item_id' => 123
        ]);

        Nivel::create([
            'id' => 71,
            'descripcion' => <<<EOT
                NIVEL 6: Se realizará el contacto con las mujeres a las que se identificó el riesgo, siempre que se haya verificado que no se han reportado atenciones por parte de los equipos y estrategias a las que se direccionó el caso y, por tanto, se desconoce el estado actual de la mujer y las dificultades que pudieron haberse presentado para que accediera a la atención y protección requerida; en dado caso, en SIMISIONAL registren atenciones por parte de la estrategia a la cual fue remitida con anterioridad por parte de LPD no se realizará el contacto puesto que los seguimientos los asumiran dicha estrategia, sin embargo se debe registrar como seguimiento un análisis de lo realizado por la estrategia (esto se marcará como seguimiento efectivo).	       
            EOT,
            'sub_item_id' => 123
        ]);



        Nivel::create([
            'id' => 72,
            'descripcion' => <<<EOT
                NIVEL 1: La profesional hace uso de los protocolos de la LPD, Guía general del Servicio Línea Púrpura Distrital, Mujeres que escuchan mujeres, Anexos, documentos complementarios a las guías y el directorio virtual teniendo en cuenta las actualizaciones y retroalimentaciones generadas durante el proceso.	       
            EOT,
            'sub_item_id' => 124
        ]);

        Nivel::create([
            'id' => 73,
            'descripcion' => <<<EOT
                NIVEL 2: La profesional emplea las novedades, información y capacitaciones brindadas por la SDMujer o el equipo de apoyo.	        
            EOT,
            'sub_item_id' => 124
        ]);








        


        
        // NIVELES DE LA MATRIZ DE CALIDAD TELEFÓNICO CONTACTO INICIAL

        Nivel::create([
            'id' => 74,
            'descripcion' => <<<EOT
                Hola. Bienvenida a la Línea Púrpura Distrital Mujeres que Escuchan Mujeres de la Secretaría Distrital de la Mujer. ¿Con quién tengo el gusto de hablar?        
            EOT,
            'sub_item_id' => 47
        ]);

        Nivel::create([
            'id' => 75,
            'descripcion' => <<<EOT
                La agente de contacto inicial está atenta al canal, se afecta la distracción.        
            EOT,
            'sub_item_id' => 48
        ]);

        Nivel::create([
            'id' => 76,
            'descripcion' => <<<EOT
                La agente de contacto inicial muestra que está atenta a la solicitud expuesta por la mujer demostrando concentración e interés por escuchar.      
            EOT,
            'sub_item_id' => 49
        ]);

        Nivel::create([
            'id' => 77,
            'descripcion' => <<<EOT
                La agente de contacto inicial debe vocalizar correctamente y mantener un ritmo de conversación adecuado, para que la mujer comprenda la información, y presentar los alcances de nuestro servicio sin extender la llamada de manera innecesaria.       
            EOT,
            'sub_item_id' => 50
        ]);

        Nivel::create([
            'id' => 78,
            'descripcion' => <<<EOT
                Solicita a la mujer espera en línea, la agente de contacto inicial debe utilizar el mute según corresponda y retomar en los tiempos establecidos: máximo 1 minuto y 30 segundos.      
            EOT,
            'sub_item_id' => 51
        ]);

        Nivel::create([
            'id' => 79,
            'descripcion' => <<<EOT
                Una vez la agente de contacto inicial necesite tiempo en espera para realizar alguna validación, debe indicarle a la mujer el motivo de la espera (Permíteme un momento en línea voy a validar la información, dame unos segundos para realizar la consulta) y una vez retome la conversación agradecer su tiempo en línea (Gracias por tu amable espera en línea, ¿Clara estas ahí?, xxxx ya volví).       
            EOT,
            'sub_item_id' => 52
        ]);

        Nivel::create([
            'id' => 80,
            'descripcion' => <<<EOT
                "Por favor permanece en línea mientras transfiero tu llamada a la profesional que te escuchará y orientará en tu caso"   
            EOT,
            'sub_item_id' => 53
        ]);

        Nivel::create([
            'id' => 81,
            'descripcion' => <<<EOT
                "Nos estamos comunicando de la LPD porque solicitaste atención vía WhatsApp, ¿quisiera saber si en este momento puedes recibir la orientación?, entonces te pido un momento por favor mientras transfiero tu llamada a una profesional que te escuchará y orientará en tu caso"      
            EOT,
            'sub_item_id' => 54
        ]);

        Nivel::create([
            'id' => 82,
            'descripcion' => <<<EOT
                Cuando se brinda información general, la agente de contacto inicial debe confirmar la claridad en la información suministrada y confirmar proceso el seguir (Ejemplo: ¿La información brindada ha sido clara?)        
            EOT,
            'sub_item_id' => 55
        ]);

        Nivel::create([
            'id' => 83,
            'descripcion' => <<<EOT
                ¿Tienes alguna otra pregunta, necesitas alguna otra orientación. "Gracias por comunicarte con la Línea Púrpura Distrital Mujeres que escuchan mujeres, recuerda que NO ESTÁS SOLA, nuestro horario de atención es las 24 horas, 7 días de la semana". La agente de contacto inicial solamente realiza el cierre de la comunicación cuando la llamada NO es transferida a una agente psicosocial.       
            EOT,
            'sub_item_id' => 56
        ]);

        Nivel::create([
            'id' => 84,
            'descripcion' => <<<EOT
                "A continuación voy a transferirte a una encuesta de satisfacción para que califiques el servicio, si puedes contestar te agradezco mucho". La agente de contacto inicial solamente realiza transferencia a la encuesta cuando la llamada NO es transferida a una agente psicosocial.       
            EOT,
            'sub_item_id' => 57
        ]);

        Nivel::create([
            'id' => 85,
            'descripcion' => <<<EOT
                La agente diligencia los campos que apliquen para la tipificación de forma correcta, teniendo en cuenta también el resultado de la llamada.       
            EOT,
            'sub_item_id' => 58
        ]);

        Nivel::create([
            'id' => 86,
            'descripcion' => <<<EOT
                En las observaciones de Inconcert, debe quedar registrado, el tipo de violencia de la cual la mujer es víctima y la localidad en donde ella vive, ejemplo: (Mujer víctima de violencia física, residente de la localidad de Bosa). En los casos de los Alertantes se debe dejar de la siguiente manera, alertante refiere caso de mujer víctima de violencia psicológica, residente de la localidad de Usme.        
            EOT,
            'sub_item_id' => 59
        ]);

        Nivel::create([
            'id' => 87,
            'descripcion' => <<<EOT
                La agente de contacto inicial evita realizar el cuelgue de la llamada sin haber solucionado el requerimiento de la mujer.       
            EOT,
            'sub_item_id' => 60
        ]);

        Nivel::create([
            'id' => 88,
            'descripcion' => <<<EOT
                La agente de contacto inicial debe evitar dejar tiempo prolongado a la mujer en espera ocasionando que esta finalice la llamada. La agente de contacto inicial simula tener fallas en el sistema para incentivar el cuelgue de la llamada. La agente finaliza de manera abrupta la llamada.       
            EOT,
            'sub_item_id' => 61
        ]);

        Nivel::create([
            'id' => 89,
            'descripcion' => <<<EOT
                La agente de contacto inicial registra la atención el mismo día en que recibe la llamada.       
            EOT,
            'sub_item_id' => 62
        ]);

        Nivel::create([
            'id' => 90,
            'descripcion' => <<<EOT
                La profesional debe realizar el registro del ID de la llamada arrojado por inconcert, en el aplicativo del SIMISIONAL con el fin de tener la trazabilidad entre los dos sistemas.      
            EOT,
            'sub_item_id' => 63
        ]);

        Nivel::create([
            'id' => 91,
            'descripcion' => <<<EOT
                La agente de contacto inicial registra la gestión realizada durante la llamada en el formulario correcto del sistema de información SIMISIONAL (dependiendo el formulario que aplique: Otras Atenciones o Contacto Inicial Fallido).        
            EOT,
            'sub_item_id' => 64
        ]);

        Nivel::create([
            'id' => 92,
            'descripcion' => <<<EOT
                "La agente registra los datos sociodemográficos correspondientes al formulario de Otras consultas:                                                                                                    
                •	Nombre completo. (si no lo brinda registrar como ANÓNIMO). 
                •	Tipo de identificación. 
                •	Número de identificación. 
                •	Teléfono Móvil o Fijo.
                •	Localidad. 
                •	Dirección.
                •	Correo Electrónico 
                En el caso del formulario de Contacto inicial fallido: se registrará con los datos proporcionados: Nombre, documento de identidad, teléfono,  si solo proporcionan el nombre y el teléfono se registran únicamente con estos datos."
            EOT,
            'sub_item_id' => 65
        ]);

        Nivel::create([
            'id' => 93,
            'descripcion' => <<<EOT
                La agente de contacto inicial  diligencia la observación en el campo de narrativa teniendo en cuenta lo mencionado por la mujer o usuario y la información brindada desde la LPD.        
            EOT,
            'sub_item_id' => 66
        ]);

        Nivel::create([
            'id' => 94,
            'descripcion' => <<<EOT
                "En el formulario de contacto inicial fallido la agente de contacto inicial diligencia:
                En el campo: “Nombre de la Atención relacionada” se debe registrar el origen de la llamada, de la siguiente manera y según corresponda:
                •	Devolución de llamadas WhatsApp (Dashboard)
                •	Devolución de llamadas Buzón de voz (Dashboard)
                •	Devolución de llamadas Equipo psicosocial.
                En el campo: “Descripción de la atención” se debe registrar la gestión de la profesional, intentos de llamada con numero de ID."
            EOT,
            'sub_item_id' => 67
        ]);

        Nivel::create([
            'id' => 95,
            'descripcion' => <<<EOT
                No proporciona información confidencial de la entidad que representa "Secretaria Distrital de la Mujer" como nombres, teléfonos y correos electrónicos de los funcionarios y del operador de servicio "IQ Outsourcing" y/o ETB. La agente no brinda información confidencial referente a las atenciones realizadas a las mujeres que se comunican con la LPD a agresores o personas que lo soliciten.       
            EOT,
            'sub_item_id' => 68
        ]);

        Nivel::create([
            'id' => 96,
            'descripcion' => <<<EOT
                La agente es empática con la mujer por medio de expresiones que así lo demuestren (“Que difícil situación”, “Debió ser doloroso para ti”, “Comprendemos la situación que estas viviendo”, etc.).       
            EOT,
            'sub_item_id' => 69
        ]);

        Nivel::create([
            'id' => 97,
            'descripcion' => <<<EOT
                La agente en la llamada debe llamar a la mujer por su nombre, evitar referirse hacia ella con la palabra mujer.        
            EOT,
            'sub_item_id' => 70
        ]);

        Nivel::create([
            'id' => 98,
            'descripcion' => <<<EOT
                La agente de contacto inicial no debe interrumpir a la mujer con un tono de voz agresivo, fuerte o sarcástico.       
            EOT,
            'sub_item_id' => 71
        ]);

        Nivel::create([
            'id' => 99,
            'descripcion' => <<<EOT
                La agente de contacto inicial no debe utilizar palabras o frases groseras u ofensivas.       
            EOT,
            'sub_item_id' => 72
        ]);

        Nivel::create([
            'id' => 100,
            'descripcion' => <<<EOT
                Evita discutir con la mujer, usuario o funcionario/a que se comunica.       
            EOT,
            'sub_item_id' => 73
        ]);

        Nivel::create([
            'id' => 101,
            'descripcion' => <<<EOT
                "Debe realizar preguntas que ayuden al correcto direccionamiento en el tramite requerido. ¿Mujer, eres mayor de edad? 
                ¿Te comunicas desde la ciudad de Bogotá? / ¿En qué localidad vives?
                ¿Estás pasando por una situación de violencia contra la mujer? o ¿Conoces a alguna mujer que esté pasando por una situación de violencia? (alertantes), Si la mujer es mayor de edad, se comunica desde Bogotá, pero responde que no se comunica por un tema 
                de violencias, la agente de contacto inicial debe hacer una pregunta adicional: ¿Requieres información respecto a tus derechos sexuales, derechos reproductivos e interrupción voluntaria del embarazo?"
            EOT,
            'sub_item_id' => 74
        ]);

        Nivel::create([
            'id' => 102,
            'descripcion' => <<<EOT
                La agente realiza la explicación de los tipos de violencia, según la Ley 1257 del 2008, en los casos en que las mujeres no logren identificar si son o no víctimas de algún hecho de violencia.         
            EOT,
            'sub_item_id' => 75
        ]);

        Nivel::create([
            'id' => 103,
            'descripcion' => <<<EOT
                Es importante que la agente de contacto inicial NO realice preguntas o indague sobre la situación de violencia (quién es el agresor o cuando ocurrieron los hechos), ya que no hace parte de su abordaje.         
            EOT,
            'sub_item_id' => 76
        ]);

        Nivel::create([
            'id' => 104,
            'descripcion' => <<<EOT
                La agente de contacto inicial deja el mensaje de voz con los datos de la LPD invitando a la mujer a comunicarse.       
            EOT,
            'sub_item_id' => 77
        ]);

        Nivel::create([
            'id' => 105,
            'descripcion' => <<<EOT
                Al establecer contacto con la mujer es necesario indagarle si en el momento tiene disponibilidad para atender la llamada.        
            EOT,
            'sub_item_id' => 78
        ]);

        Nivel::create([
            'id' => 106,
            'descripcion' => <<<EOT
                "Si la agente de contacto inicial se encuentra en devolución de llamadas (solamente en caso de que NO 
                se conozca una situación de violencias en el Dashboard) y contesta un hombre, la agente no menciona 
                nombre de la mujer ni lo que hace la Línea Púrpura. Esto aplica para devolución de llamadas de buzón, 
                fantasmas y abandonadas con el fin de evitar poner en riesgo a la mujer."
            EOT,
            'sub_item_id' => 79
        ]);

        Nivel::create([
            'id' => 107,
            'descripcion' => <<<EOT
                La agente de contacto inicial debe realizar las preguntas filtro a la mujer, debido a que por el origen de la llamada se desconoce su solicitud. ¿Eres mayor de edad?, ¿en qué localidad vives? y ¿estas pasando por alguna situación de violencia?         
            EOT,
            'sub_item_id' => 80
        ]);

        Nivel::create([
            'id' => 108,
            'descripcion' => <<<EOT
                En las llamadas en las cuales se identifique alguna vulneración, inobservancia o amenaza hacia algún NNA, la agente deberá realizar el respectivo reporte al ICBF.        
            EOT,
            'sub_item_id' => 81
        ]);

        Nivel::create([
            'id' => 109,
            'descripcion' => <<<EOT
                La agente utiliza de forma correcta la plantilla de reporte de ICBF, y envía el reporte al correo atencionalciudadano@icbf.gov.co. Una vez enviado este correo se debe cargar el reporte en la atención registrada en el SIMISIONAL.       
            EOT,
            'sub_item_id' => 82
        ]);

        Nivel::create([
            'id' => 110,
            'descripcion' => <<<EOT
                En las llamadas en las que se mencionen conductas suicidas de hombres, NNA o mujeres (que no estén relacionadas con VBG), se deberá realizar el reporte a SISVECOS, con los datos respectivos a los correos de esta entidad. Una vez enviado este correo se debe cargar el reporte en la atención registrada en el Simisional. sisvecos@saludcapital.gov.co) Si es una mujer fuera de Bogota consulta con el area psicosocial.      
            EOT,
            'sub_item_id' => 83
        ]);

        Nivel::create([
            'id' => 111,
            'descripcion' => <<<EOT
                La agente de contacto inicial debe orientar de forma correcta a la mujer o usurios en su requerimiento siguiendo el protocolo o ruta establecida por la Secretaria Distrital de la Mujer, o según la información encontrada en la web, en los casos que la información solicitada sea diferente al objetivo de la línea.        
            EOT,
            'sub_item_id' => 84
        ]);

        Nivel::create([
            'id' => 112,
            'descripcion' => <<<EOT
                La agente de contacto inicial debe ofrecer alternativas para solucionar el requerimiento de la mujer o usuarios, en general brindando todas las rutas de atención que requiera el caso.        
            EOT,
            'sub_item_id' => 85
        ]);

        Nivel::create([
            'id' => 113,
            'descripcion' => <<<EOT
                Se afectará este sub ítem cuando la agente de contacto inicial transfiera la llamada a las agentes de atención psicosocial, sin que esta cumpla con el objetivo de la línea        
            EOT,
            'sub_item_id' => 86
        ]);

        Nivel::create([
            'id' => 114,
            'descripcion' => <<<EOT
                La agente realiza preguntas filtro al alertante, ¿La mujer, es mayor de edad?, ¿Ella vive en Bogotá? / ¿En qué localidad vive?, ¿Está pasando por una situación de violencia en su contra?        
            EOT,
            'sub_item_id' => 87
        ]);

        Nivel::create([
            'id' => 115,
            'descripcion' => <<<EOT
                En este caso la agente de contacto incial no debera indagar por los datos de la mujer víctima, solo realizar la preguntas filtro establecidas y transfiere con una profesional de la LPD. En caso que el alertante no desee recibir la atención de la profesional de la LPD,  pero desea dar los datos de la mujer se pueden tomar y se realizará la llamada a la mujer víctima de violencia.        
            EOT,
            'sub_item_id' => 88
        ]);

        Nivel::create([
            'id' => 116,
            'descripcion' => <<<EOT
                Brinda primeros auxilios psicológicos cuando la persona presente crisis, llanto fácil, etc., y diseña estrategia de estabilización emocional cuando se requiere.        
            EOT,
            'sub_item_id' => 89
        ]);

        Nivel::create([
            'id' => 117,
            'descripcion' => <<<EOT
                La agente realiza la llamada a la línea de emergencias 123, en caso de que la llamada así lo requiera, si la emergencia se presenta después de las 9 pm, la agente deberá realizar la activación desde su celular.        
            EOT,
            'sub_item_id' => 90
        ]);

        Nivel::create([
            'id' => 118,
            'descripcion' => <<<EOT
                En caso de activación de la linea 123 con relacion a hechos de violencia contra la mujer, se realiza envió de correo de notificación a integracionlpd-123@sdmujer.gov.co de forma inmediata, que permita la gestión del caso correspondiente.         
            EOT,
            'sub_item_id' => 91
        ]);

        Nivel::create([
            'id' => 119,
            'descripcion' => <<<EOT
                La agente de contacto inicial usa las guías de LPD (Guía general del Servicio Línea Púrpura Distrital “Mujeres que escuchan mujeres, Anexo No 1. Guía para agentes de contacto inicial y agentes de atención psicosocial de la Línea Púrpura Distrital para atención a través del Canal telefónico 018000112137), teniendo en cuenta las actualizaciones y retroalimentaciones generadas durante el proceso. Pone en práctica las novedades, información y capacitaciones brindadas por la SDMujer o el Staff (equipo de apoyo).         
            EOT,
            'sub_item_id' => 92
        ]);
        Nivel::create([
            'id' => 120,
            'descripcion' => <<<EOT
                La agente hace uso del directorio virtual de la LPD, para brindar información a las mujeres y demás usuarios, además para tener los datos en el momento de realizar algún reporte, (ICBF - SISVECOS)        
            EOT,
            'sub_item_id' => 93
        ]);

        

    }
}
