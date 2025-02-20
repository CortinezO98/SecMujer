<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluacionAtributo extends Model
{
    use HasFactory;
    protected $table = 'evaluacion_atributos';

    public $timestamps = false;

    protected $fillable = [
        'evaluacion_id',
        'atributo_id',
        'nota'
    ];
}
