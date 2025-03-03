<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubItem extends Model
{
    use HasFactory;
    protected $table = 'sub_items';

    public $timestamps = false;

    protected $fillable = ['descripcion', 'activo', 'item_id' ];

    protected $with = ['niveles']; 

    public function niveles()
    {
        return $this->hasMany(Nivel::class, 'sub_item_id');
    }
}
