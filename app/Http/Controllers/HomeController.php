<?php

namespace App\Http\Controllers;

use App\Enums\Roles;
use App\Http\Controllers\Controller;
use App\Models\Evaluacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function homeView(Request $request){
        $userAuthenticared = Auth::user();
        if ($userAuthenticared) 
        {
            switch ($userAuthenticared->roleId) 
            {
                case Roles::Administrador->value:
                    return redirect(route('ViewRegister'));

                case Roles::Supervisor->value:
                    return redirect(route('viewSupervisor'));

                case Roles::AgenteContactoInicial->value:
                case Roles::AgenteProfesional->value:
                    return redirect(route('viewAgente'));
                    
                default:
                    return redirect(route('logout'));
            }
        } 
        else 
        {
            return redirect(route('login'));
        }
    }

    public function viewSupervisor(Request $request)
    {
        $nombreCampo = $request->query('filtro');
        $numeroRegistroPorPagina = 10;

        if ($nombreCampo == 'rangoFechas')
        { 
            $fechaInicio =  $request->query('fechaInicio');
            $fechaFin =  $request->query('fechaFin');

            $evaluaciones = Evaluacion::when($fechaInicio && $fechaFin, function ($query) use ($fechaInicio, $fechaFin) {
                return $query->whereBetween('fecha_registro', [$fechaInicio, $fechaFin]);
            })->paginate($numeroRegistroPorPagina);
        }    
        else 
        {
            if ($nombreCampo == 'agente_id')
            {
                $valorBusqueda = $request->query('agente_id');
            } else {
                $valorBusqueda = $request->query('valor');
            }

            $evaluaciones = Evaluacion::when($nombreCampo, function ($query) use ($nombreCampo, $valorBusqueda) {
                return $query->where($nombreCampo, $valorBusqueda);
            })->paginate($numeroRegistroPorPagina);
        }

        return view('roles.supervisor', compact('evaluaciones'));
    }

    public function viewAgente(Request $request)
    {
        $fechaInicio =  $request->query('fechaInicio');
        $fechaFin =  $request->query('fechaFin');
        $agenteLogeadoId = Auth::user()->id;

        $evaluaciones = Evaluacion::when($agenteLogeadoId, function ($query) use ($agenteLogeadoId) {
            return $query->where('agente_id', $agenteLogeadoId);
        })
        ->when($fechaInicio && $fechaFin, function ($query) use ($fechaInicio, $fechaFin) {
            return $query->whereBetween('fecha_registro', [$fechaInicio, $fechaFin]);
        })->paginate(10);
    
        return view('roles.agente', compact('evaluaciones'));
    }
}
