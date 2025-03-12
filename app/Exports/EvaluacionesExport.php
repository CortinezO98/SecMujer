<?php

namespace App\Exports;

use App\Models\Evaluacion;
use App\Models\Atributo;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class EvaluacionesExport implements FromCollection, WithHeadings, WithMapping
{
    use Exportable;
    
    protected $evaluaciones;
    protected $estructura = [];

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

        if ($this->evaluaciones->isNotEmpty()) {
            $matriz = $this->evaluaciones->first()->matriz;
            if ($matriz) {
                foreach ($matriz->atributos as $atributo) {
                    foreach ($atributo->items as $item) {
                        foreach ($item->subitems as $subitem) {
                            if ($subitem->niveles->count() > 0) {
                                foreach ($subitem->niveles as $nivel) {
                                    $nombreColumna = $subitem->descripcion . ' / ' . $nivel->descripcion;
                                    $this->estructura[] = [
                                        'tipo'         => 'nivel',
                                        'nivel_id'     => $nivel->id,
                                        'nombre_columna' => $nombreColumna,
                                    ];
                                }
                            } else {
                                $nombreColumna = $subitem->descripcion;
                                $this->estructura[] = [
                                    'tipo'        => 'subitem',
                                    'subitem_id'  => $subitem->id,
                                    'nombre_columna' => $nombreColumna,
                                ];
                            }
                        }
                    }
                }
            }
        }
        
    }


    public function collection()
    {
        return $this->evaluaciones;
    }


    public function map($evaluacion): array
    {
        $data = [
            $evaluacion->consecutivo,
            $evaluacion->usuario_registro ? $evaluacion->usuario_registro->name : '',
            $evaluacion->agente->name ?? '',
            $evaluacion->matriz->canal->descripcion ?? '',
            $evaluacion->matriz->descripcion ?? '',
            $evaluacion->tipo_monitoreo->descripcion ?? '',
            $evaluacion->llamada_id,
            $evaluacion->fecha_registro,
            $evaluacion->mostrarNotas(),
            $evaluacion->observaciones,
            $evaluacion->aspectos_positivos,
            $evaluacion->aspectos_a_mejorar,
            $evaluacion->comentarios,
            $evaluacion->fecha_registro,
        ];

        foreach ($this->estructura as $col) {
            if ($col['tipo'] === 'nivel') {
                $valor = $this->checkCumpleNivel($evaluacion, $col['nivel_id']);
            } else {
                $valor = $this->checkCumpleSubitem($evaluacion, $col['subitem_id']);
            }
            $data[] = $valor;
        }

        return $data;
    }

    public function headings(): array
    {
        $head = [
            'Consecutivo',
            'Evaluado Por',
            'Agente',
            'Canal',
            'Matriz',
            'Tipo Monitoreo',
            'Número Interacción',
            'Fecha Interacción',
            'Notas',
            'Observaciones',
            'Aspectos Positivos',
            'Aspectos a Mejorar',
            'Observación Final',
            'Fecha Evaluación',
        ];

        foreach ($this->estructura as $col) {
            $head[] = $col['nombre_columna'];
        }

        return $head;
    }

    protected function checkCumpleNivel(Evaluacion $evaluacion, $nivelId)
    {
        $nivel = \App\Models\Nivel::find($nivelId);
        if (!$nivel) {
            return 0;
        }
        $cumple = $nivel->checkCumple($evaluacion->id, 1);
        return $cumple === 'checked' ? 1 : 0;
    }

    protected function checkCumpleSubitem(Evaluacion $evaluacion, $subitemId)
    {
        $subitem = \App\Models\SubItem::find($subitemId);
        if (!$subitem) {
            return 0;
        }
        $cumple = $subitem->checkCumple($evaluacion->id, 1);
        return $cumple === 'checked' ? 1 : 0;
    }
}
