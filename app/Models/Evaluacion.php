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
        'comentarios_respondido_at',
        'compromisos_respondido_at',
        'fecha_registro',
        'agente_id',
        'matriz_id',
        'tipo_monitoreo_id',
        'estado_evaluacion_id'
    ];

    protected $casts = [
        'comentarios_respondido_at' => 'datetime',
        'compromisos_respondido_at' => 'datetime',
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



}
