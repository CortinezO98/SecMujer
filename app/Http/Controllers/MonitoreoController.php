<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Canal;
use App\Models\Matriz;
use App\Models\TipoMonitoreo;

class MonitoreoController extends Controller
{
    public function NuevoMonitoreo()
    {
        return view('monitoreo.nuevoMonitoreo');
    }

    public function getCanales()
    {
        $canales = Canal::all();
        return response()->json($canales);
    }

    public function getMatrices($canal_id)
    {
        $matrices = Matriz::where('canal_id', $canal_id)->get();
        return response()->json($matrices);
    }

    public function getTiposMonitoreos()
    {
        $tiposMonitoreos = TipoMonitoreo::all();
        return response()->json($tiposMonitoreos);
    }
}
