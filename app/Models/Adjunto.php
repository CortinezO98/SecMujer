<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adjunto extends Model
{
    use HasFactory;

    protected $table = 'adjuntos';

    public $timestamps = false;

    protected $fillable = [
        'evaluacion_id', 
        'nombre_archivo', 
        'ruta',
        'tipo',
        'peso',
        'eliminado',
        'fecha_borrado'
    ];

    public function evaluacion()
    {
        return $this->belongsTo(Evaluacion::class, 'evaluacion_id');
    }
}
