<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Nivel extends Model
{
    use HasFactory;

    protected $table = 'nivels';

    public $timestamps = false;

    protected $fillable = ['descripcion', 'activo', 'sub_item_id' ];

    public function checkCumple($evaluacion_id, $radioType)
    {
        $evaluacionNivel = EvaluacionNivel::where([
            'evaluacion_id' => $evaluacion_id,
            'nivel_id' => $this->id
        ])->first();
            
        $checked = true;
        if ($evaluacionNivel) {
            $checked = $evaluacionNivel->cumple;
        }
        if ($radioType == 0) {
            $checked = !$checked;
        }
        if ($checked){
            return 'checked';
        }
        return '';
    }
}
