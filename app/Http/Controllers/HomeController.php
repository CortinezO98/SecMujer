<?php

namespace App\Http\Controllers;

use App\Enums\Roles;
use App\Http\Controllers\Controller;
use App\Models\Evaluacion;
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
                    return $this->viewSupervisor();

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

    public function viewSupervisor(){
        $evaluaciones = Evaluacion::all();
        return view('roles.supervisor', compact('evaluaciones'));
    }
}
