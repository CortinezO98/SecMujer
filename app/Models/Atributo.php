<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atributo extends Model
{
    use HasFactory;

    protected $table = 'atributos';

    public $timestamps = false;

    protected $fillable = [
        'descripcion', 
        'peso', 
        'activo', 
        'matriz_id',
        'abreviatura_id'
    ];

    protected $with = ['items']; 

    public function items()
    {
        return $this->hasMany(Item::class, 'atributo_id');
    }

    public function cantidadRowSpan() {
        $suma = 0;
        foreach ($this->items as $item){
            foreach ($item->subitems as $subitem){
                if(count($subitem->niveles)){
                    $suma += count($subitem->niveles);
                } else {
                    $suma += 1;
                }
            }
        }
        return $suma;
    }

    public function tieneNiveles() {
        foreach($this->matriz->atributos as $atributo){
            foreach ($atributo->items as $item){
                foreach ($item->subitems as $subitem){
                    if(count($subitem->niveles)){
                        return true;
                    }
                }
            }
        }
        return false;
    }
}
