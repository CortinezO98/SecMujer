<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Matriz extends Model
{
    use HasFactory;

    protected $table = 'matrizs';

    public $timestamps = false;

    protected $fillable = ['descripcion', 'canal_id'];

    protected $with = ['canal']; 

    public function canal()
    {
        return $this->belongsTo(Canal::class, 'canal_id');
    }

    public function atributos()
    {
        return $this->hasMany(Atributo::class, 'matriz_id');
    }
}
