<?php

namespace App\Http\Controllers;

use App\Enums\Roles;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function homeView(){
        $userAuthenticared = Auth::user();
        if ($userAuthenticared) 
        {
            switch ($userAuthenticared->roleId) 
            {
                case Roles::Administrador->value:
                    return redirect(route('ViewRegister'));

                case Roles::Supervisor->value:
                    return view('roles.supervisor');

                case Roles::Agente->value:
                    return view('roles.agente');

                default:
                    return redirect(route('logout'));
            }
        } 
        else 
        {
            return redirect(route('login'));
        }
    }
}
