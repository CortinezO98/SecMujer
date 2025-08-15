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
    protected $estructura = [];

    public function __construct(Request $request)
    {
        $params = $request->all();
        $query = Evaluacion::query();

        // ✅ Filtro combinado por canal y matriz dentro de la relación matriz
        if (!empty($params['canal_id']) && !empty($params['matriz_id'])) {
            $query->whereHas('matriz', function ($q) use ($params) {
                $q->where('canal_id', $params['canal_id'])
                  ->where('id', $params['matriz_id']);
            });
        } elseif (!empty($params['canal_id'])) {
            $query->whereHas('matriz', function ($q) use ($params) {
                $q->where('canal_id', $params['canal_id']);
            });
        } elseif (!empty($params['matriz_id'])) {
            $query->whereHas('matriz', function ($q) use ($params) {
                $q->where('id', $params['matriz_id']);
            });
        }

        // ✅ Filtro por fecha
        if (!empty($params['fechaInicio']) && !empty($params['fechaFin'])) {
            $query->whereBetween('fecha_registro', [
                $params['fechaInicio'],
                $params['fechaFin'],
            ]);
        }

        $this->evaluaciones = $query->get();

        // ✅ Estructura dinámica de columnas
        $estructuraUnion = [];
        foreach ($this->evaluaciones as $evaluacion) {
            $matriz = $evaluacion->matriz;
            if ($matriz) {
                foreach ($matriz->atributos as $atributo) {
                    foreach ($atributo->items as $item) {
                        foreach ($item->subitems as $subitem) {
                            if ($subitem->niveles->count() > 0) {
                                foreach ($subitem->niveles as $nivel) {
                                    $key = 'nivel_' . $nivel->id;
                                    $nombreColumna = $subitem->descripcion . ' / ' . $nivel->descripcion;
                                    $estructuraUnion[$key] = [
                                        'tipo'           => 'nivel',
                                        'nivel_id'       => $nivel->id,
                                        'nombre_columna' => $nombreColumna,
                                    ];
                                }
                            } else {
                                $key = 'subitem_' . $subitem->id;
                                $estructuraUnion[$key] = [
                                    'tipo'           => 'subitem',
                                    'subitem_id'     => $subitem->id,
                                    'nombre_columna' => $subitem->descripcion,
                                ];
                            }
                        }
                    }
                }
            }
        }

        $this->estructura = array_values($estructuraUnion);
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
            $evaluacion->compromisos,
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
            'Compromisos',
            'Fecha Evaluación',
        ];

        foreach ($this->estructura as $col) {
            $head[] = $col['nombre_columna'];
        }

        return $head;
    }

    protected function checkCumpleNivel(Evaluacion $evaluacion, $nivelId)
    {
        $evaluacionNivel = \App\Models\EvaluacionNivel::where([
            'evaluacion_id' => $evaluacion->id,
            'nivel_id'      => $nivelId,
        ])->first();

        return $evaluacionNivel ? ((int)$evaluacionNivel->cumple === 1 ? 1 : 0) : 0;
    }

    protected function checkCumpleSubitem(Evaluacion $evaluacion, $subitemId)
    {
        $evaluacionSubItem = \App\Models\EvaluacionSubItem::where([
            'evaluacion_id' => $evaluacion->id,
            'sub_item_id'   => $subitemId,
        ])->first();

        return $evaluacionSubItem ? ((int)$evaluacionSubItem->cumple === 1 ? 1 : 0) : 0;
    }
}
