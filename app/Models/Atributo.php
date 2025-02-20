<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atributo extends Model
{
    use HasFactory;
    protected $table = 'atributos';

    public $timestamps = false;

    protected $fillable = ['descripcion', 'Peso', 'Activo', ];
}
