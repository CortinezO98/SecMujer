<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUserWithRole($role_id)
    {
        $users = User::where('roleId', $role_id)->get();
        return response()->json($users);
    }
}
