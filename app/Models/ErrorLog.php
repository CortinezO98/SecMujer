<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ErrorLog extends Model
{
    use HasFactory;

    protected $table = 'error_logs';

    protected $fillable = [
        'function_name',
        'exception_message',
        'user_id'
    ];
}
