<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abreviatura extends Model
{
    use HasFactory;

    protected $table = 'abreviaturas';

    public $timestamps = false;

    protected $fillable = ['abreviatura'];
}
