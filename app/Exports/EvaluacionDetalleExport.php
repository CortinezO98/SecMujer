<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\Models\Evaluacion;
use App\Models\Atributo;

class EvaluacionDetalleExport implements FromView
{
    protected $evaluacion;
    protected $atributos;
    protected $tieneNiveles;

    public function __construct($evaluacion)
    {
        $this->evaluacion = $evaluacion;
        $this->atributos = Atributo::where('matriz_id', $evaluacion->matriz_id)->get();
        $this->tieneNiveles = $evaluacion->tieneNiveles();
    }

    public function view(): View
    {
        return view('exports.detalleEvaluacionExcel', [
            'evaluacion'     => $this->evaluacion,
            'atributos'      => $this->atributos,
            'tieneNiveles'   => $this->tieneNiveles,
            'disabledCumple' => '',
        ]);
    }
}
