<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluacionAbreviatura extends Model
{
    use HasFactory;

    protected $table = 'evaluacion_abreviaturas';

    public $timestamps = false;

    protected $fillable = [
        'evaluacion_id',
        'abreviatura_id',
        'nota'
    ];

    protected $with = [
        'abreviatura'
    ]; 

    public function abreviatura()
    {
        return $this->belongsTo(Abreviatura::class, 'abreviatura_id');
    }
}
