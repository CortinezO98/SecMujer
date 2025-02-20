<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluacionSubItem extends Model
{
    use HasFactory;

    protected $table = 'evaluacion_sub_items';

    public $timestamps = false;

    protected $fillable = [
        'evaluacion_id',
        'sub_item_id',
        'cumple'
    ];
}
