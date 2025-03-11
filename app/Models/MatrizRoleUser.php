<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatrizRoleUser extends Model
{
    use HasFactory;

    protected $table = 'matriz_role_users';

    public $timestamps = false;

    protected $fillable = ['matriz_id', 'user_role_id'];
}
