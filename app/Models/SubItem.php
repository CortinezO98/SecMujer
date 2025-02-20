<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubItem extends Model
{
    use HasFactory;
    protected $table = 'sub_items';

    public $timestamps = false;

    protected $fillable = ['descripcion', 'Activo', 'item_id' ];
}
