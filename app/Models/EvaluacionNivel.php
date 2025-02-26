<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EvaluacionNivel extends Model
{
    use HasFactory;
    protected $table = 'evaluacion_nivels';

    public $timestamps = false;

    protected $fillable = [
        'evaluacion_id',
        'nivel_id',
        'cumple'
    ];
}
