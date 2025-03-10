<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Illuminate\Http\Request;

class Evaluacion extends Model
{
    use HasFactory;

    protected $table = 'evaluacions';

    public $timestamps = false;

    protected $fillable = [
        'consecutivo',
        'observaciones',
        'aspectos_positivos',
        'aspectos_a_mejorar',
        'comentarios',
        'compromisos',
        'fecha_registro',
        'agente_id',
        'matriz_id',
        'tipo_monitoreo_id',
        'estado_evaluacion_id'
    ];
    
    protected $with = [
        'matriz', 
        'agente', 
        'tipo_monitoreo', 
        'estado_evaluacion',
        'evaluacionSubitems'
    ]; 

    public function matriz()
    {
        return $this->belongsTo(Matriz::class, 'matriz_id');
    }

    public function agente()
    {
        return $this->belongsTo(User::class, 'agente_id');
    }

    public function tipo_monitoreo()
    {
        return $this->belongsTo(TipoMonitoreo::class, 'tipo_monitoreo_id');
    }

    public function estado_evaluacion()
    {
        return $this->belongsTo(EstadoEvaluacion::class, 'estado_evaluacion_id');
    }

    public function subitems()
    {
        return $this->hasMany(SubItem::class, 'evaluacion_id');
    }

    public function notas_abreviatura()
    {
        return $this->hasMany(EvaluacionAbreviatura::class, 'evaluacion_id');
    }

    public function usuario_registro()
    {
        return $this->belongsTo(User::class, 'usuario_registro_id');
    }

    public function adjuntos()
    {
        return $this->hasMany(Adjunto::class, 'evaluacion_id');
    }

    public function evaluacionSubitems()
    {
        return $this->hasMany(EvaluacionSubItem::class, 'evaluacion_id');
    }

    public function mostrarNotas(){
        return $this->notas_abreviatura->map(function ($evaluacion_abreviatura) {
            return $evaluacion_abreviatura->abreviatura->abreviatura . ' ' . $evaluacion_abreviatura->nota;
        })->implode(' | ');
    }

    public function tieneNiveles(){
        foreach($this->matriz->atributos as $atributo){
            foreach ($atributo->items as $item){
                foreach ($item->subitems as $subitem){
                    if(count($subitem->niveles)){
                        return true;
                    }
                }
            }
        }
        return false;
    }

    public function exportarReporteCsv($request)
    {
        // Recoger parámetros del formulario
        $params = $request->all();
    
        // Construir la consulta de evaluaciones
        $query = Evaluacion::query();
    
        if (!empty($params['selectChannel'])) {
            $query->whereHas('matriz.canal', function ($q) use ($params) {
                $q->where('descripcion', $params['selectChannel']);
            });
        }
    
        if (!empty($params['fechaInicio']) && !empty($params['fechaFin'])) {
            $query->whereBetween('fecha_registro', [
                $params['fechaInicio'],
                $params['fechaFin']
            ]);
        }
    
        $evaluaciones = $query->get();
    
        // Crear una nueva hoja de cálculo
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
    
        // Definir los encabezados del Excel
        $headers = [
            'Consecutivo',
            'ID Llamada',
            'Teléfono Mujer',
            'Estado Evaluación',
            'Canal',
            'Matriz',
            'Tipo Monitoreo',
            'Agente',
            'Fecha Registro',
            'Nota Total',
        ];
    
        // Escribir encabezados en la fila 1
        $columnIndex = 'A';
        foreach ($headers as $header) {
            $sheet->setCellValue($columnIndex . '1', $header);
            $columnIndex++;
        }
    
        // Escribir datos a partir de la fila 2
        $row = 2;
        foreach ($evaluaciones as $evaluacion) {
            $sheet->setCellValue('A' . $row, $evaluacion->consecutivo);
            $sheet->setCellValue('B' . $row, $evaluacion->llamada_id);
            $sheet->setCellValue('C' . $row, $evaluacion->mujer_telefono);
            $sheet->setCellValue('D' . $row, $evaluacion->estado_evaluacion->descripcion);
            $sheet->setCellValue('E' . $row, $evaluacion->matriz->canal->descripcion);
            $sheet->setCellValue('F' . $row, $evaluacion->matriz->descripcion);
            $sheet->setCellValue('G' . $row, $evaluacion->tipo_monitoreo->descripcion);
            $sheet->setCellValue('H' . $row, $evaluacion->agente->name);
            $sheet->setCellValue('I' . $row, $evaluacion->fecha_registro);
            $sheet->setCellValue('J' . $row, $evaluacion->nota_total);
            $row++;
        }
    
        // Crear el escritor para Excel (formato xlsx)
        $writer = new Xlsx($spreadsheet);
        $fileName = 'reporte_evaluaciones.xlsx';
    
        // Configurar encabezados para la descarga
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header("Content-Disposition: attachment; filename=\"$fileName\"");
        header('Cache-Control: max-age=0');
    
        $writer->save('php://output');
        exit;
    }

}
