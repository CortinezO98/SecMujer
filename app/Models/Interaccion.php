<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interaccion extends Model
{
    use HasFactory;

    protected $table = 'interaccions';

    public $timestamps = false;

    protected $fillable = [
        'consecutivo',
        'numero',
        'fecha_interaccion',
        'fecha_registro',
        'evaluacion_id',
        'agente_id',
        'usuario_registro_id'
    ];

    public function usuario_registro()
    {
        return $this->belongsTo(User::class, 'usuario_registro_id');
    }
}
