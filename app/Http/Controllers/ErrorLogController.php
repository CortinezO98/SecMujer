<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ErrorLog;

class ErrorLogController extends Controller
{
    public static function CreateErrorLog(\Exception $ex, $function_name, $user_id)
    {
        try {
            ErrorLog::create([
                'function_name'  => $function_name,
                'exception_message'  => $ex,
                'user_id'  => $user_id,
            ]);
        } catch (\Exception $ex) {
            // Ignore exception
        }
    }
}
