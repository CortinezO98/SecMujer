<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    use HasFactory;

    protected $table = 'evaluacions';

    public $timestamps = false;

    protected $fillable = [
        'consecutivo',
        'nota_total',
        'observaciones',
        'aspectos_positivos',
        'aspectos_a_mejorar',
        'comentarios',
        'comentarios_refutacion',
        'observacion_final',
        'compromisos',
        'fecha_registro',
        'agente_id',
        'matriz_id',
        'tipo_monitoreo_id',
        'estado_evaluacion_id'
    ];
    
    protected $with = ['matriz', 'agente', 'tipo_monitoreo', 'estado_evaluacion', 'interaccion']; 

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
    
    public function interaccion()
    {
        return $this->hasOne(Interaccion::class, 'evaluacion_id');
    }

}
