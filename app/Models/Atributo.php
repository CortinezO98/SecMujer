<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atributo extends Model
{
    use HasFactory;

    protected $table = 'atributos';

    public $timestamps = false;

    protected $fillable = ['descripcion', 'peso', 'activo', 'matriz_id'];

    protected $with = ['items']; 

    public function items()
    {
        return $this->hasMany(Item::class, 'atributo_id');
    }

    public function cantidadSubItems() {
        $suma = 0;
        foreach ($this->items as $item){
            $suma += count($item->subitems);
        }
        return $suma;
    }
}
