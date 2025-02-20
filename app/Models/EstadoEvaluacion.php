<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class EstadoEvaluacion extends Model
{
    use HasFactory;
    protected $table = 'estado_evaluacions';

    public $timestamps = false;

    protected $fillable = ['descripcion'];
}
