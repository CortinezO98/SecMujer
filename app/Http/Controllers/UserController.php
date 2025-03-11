<?php

namespace App\Http\Controllers;

use App\Enums\Roles;
use App\Models\MatrizRoleUser;
use App\Models\User;

class UserController extends Controller
{
    public function obtenerAgentes($matriz_id)
    {
        if ($matriz_id) {
            $matrizRoleUser =  MatrizRoleUser::where('matriz_id', $matriz_id)->first();
            $users = User::where('roleId', $matrizRoleUser->user_role_id)->get();
        } else {
            $users = User::where('roleId', Roles::AgenteContactoInicial)
            ->orWhere('roleId', Roles::AgenteProfesional)
            ->get();
        }
        return response()->json($users);
    }
}
