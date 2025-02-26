<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Nivel extends Model
{
    use HasFactory;

    protected $table = 'nivels';

    public $timestamps = false;

    protected $fillable = ['descripcion', 'activo', 'sub_item_id' ];
}
