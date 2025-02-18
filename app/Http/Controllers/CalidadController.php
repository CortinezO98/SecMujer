<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalidadController extends Controller
{
    public function showNuevoMonitoreo($userLogin)
    {

        return view('nuevoMonitoreo', compact('userLogin'));

    }

    public function MonitoreoNoTipificacion($userLogin)
    {
        return view('MonitoreoNoTipificacion', compact('userLogin'));
    }
}
