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
    
    protected $with = ['matriz', 'agente', 'tipo_monitoreo', 'estado_evaluacion']; 

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

    public function notas_atributos()
    {
        return $this->hasMany(EvaluacionAtributo::class, 'evaluacion_id');
    }

    public function usuario_registro()
    {
        return $this->belongsTo(User::class, 'usuario_registro_id');
    }

    public function adjuntos()
    {
        return $this->hasMany(Adjunto::class, 'evaluacion_id');
    }

    public function mostrarNotas(){
        return $this->notas_atributos->map(function ($nota) {
            return $nota->abreviatura->abreviatura . ' ' . $nota->nota;
        })->implode(' | ');
    }
}
