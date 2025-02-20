<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
