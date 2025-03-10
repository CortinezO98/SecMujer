<?php

namespace App\Exports;

use App\Models\Evaluacion;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class EvaluacionesExport implements FromCollection, WithHeadings, WithMapping
{
    use Exportable;
    
    protected $evaluaciones;

    public function __construct(Request $request)
    {
        $params = $request->all();

        $query = Evaluacion::query();

        if (!empty($params['canal_id'])) {
            $query->whereHas('matriz.canal', function ($q) use ($params) {
                $q->where('id', $params['canal_id']);
            });
        }


        if (!empty($params['fechaInicio']) && !empty($params['fechaFin'])) {
            $query->whereBetween('fecha_registro', [
                $params['fechaInicio'],
                $params['fechaFin']
            ]);
        }

        $this->evaluaciones = $query->get();
    }

    public function collection()
    {
        return $this->evaluaciones;
    }

    public function map($evaluacion): array
    {
        return [
            $evaluacion->consecutivo,
            $evaluacion->llamada_id,
            $evaluacion->mujer_telefono,
            $evaluacion->estado_evaluacion->descripcion,
            $evaluacion->matriz->canal->descripcion,
            $evaluacion->matriz->descripcion,
            $evaluacion->tipo_monitoreo->descripcion,
            $evaluacion->agente->name,
            $evaluacion->fecha_registro,
            $evaluacion->mostrarNotas(),
            $evaluacion->observaciones,
            $evaluacion->aspectos_positivos,
            $evaluacion->aspectos_a_mejorar,
            $evaluacion->comentarios,
            $evaluacion->compromisos,
            $evaluacion->usuario_registro->name,
            $evaluacion->fecha_registro,

        ];
    }

    public function headings(): array
    {
        return [
            'Consecutivo',
            'ID Llamada',
            'Numero de Telefono',
            'Estado Evaluación',
            'Canal',
            'Matriz',
            'Tipo de Monitoreo',
            'Agente',
            'Fecha Registro',
            'Notas',
            'Observaciones',
            'Aspectos Positivos',
            'Aspectos a Mejorar',
            'Comentarios',
            'Compromisos',
            'Registrado por',
            'Fecha Evaluación',
        ];
    }

    
}
