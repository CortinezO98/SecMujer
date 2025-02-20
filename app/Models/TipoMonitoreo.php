<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class TipoMonitoreo extends Model
{
    use HasFactory;
    protected $table = 'tipo_monitoreos';

    public $timestamps = false;

    protected $fillable = ['descripcion'];
}
