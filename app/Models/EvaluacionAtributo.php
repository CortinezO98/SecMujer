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
        'abreviatura_id',
        'nota'
    ];

    public function atributo()
    {
        return $this->belongsTo(Atributo::class, 'atributo_id');
    }

    public function abreviatura()
    {
        return $this->belongsTo(Abreviatura::class, 'abreviatura_id');
    }
}
