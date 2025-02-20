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
}
