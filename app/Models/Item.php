<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $table = 'items';

    public $timestamps = false;

    protected $fillable = ['descripcion', 'peso', 'activo', 'atributo_id' ];

    protected $with = ['subitems']; 

    public function subitems()
    {
        return $this->hasMany(SubItem::class, 'item_id');
    }

    public function rowSpan() {
        $cantidad = 0;
        foreach($this->subitems as $subitem){
            if (count($subitem->niveles)){
                $cantidad += count($subitem->niveles);
            } else {
                $cantidad += 1;
            }
        }
        return $cantidad;
    }
}
