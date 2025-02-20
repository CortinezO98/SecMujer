<?php

namespace App\Http\Controllers;

use App\Models\Evaluacion;
use App\Models\Interaccion;
use App\Enums\EstadosEvaluaciones;
use App\Models\Atributo;
use App\Utilities\Utility;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use RealRashid\SweetAlert\Facades\Alert;
use Exception;


class EvaluacionController extends Controller
{
    public function crearEvaluacion(Request $request){
        $consecutivo = Utility::GenerarConsecutivo();

        $evaluacion = new Evaluacion($request->all());
        $evaluacion->consecutivo = 'EV'.$consecutivo;
        $evaluacion->fecha_registro = now();
        $evaluacion->estado_evaluacion_id = EstadosEvaluaciones::Pendiente->value;

        $interaccion = new Interaccion($request->all());
        $interaccion->consecutivo = 'IN'.$consecutivo;
        $interaccion->numero = Utility::ObtenerNumeroInteraccionSinTipificacion();
        $interaccion->fecha_registro = now();
        $interaccion->usuario_registro_id = Auth::id();

        try 
        {
            DB::beginTransaction();
            
            $evaluacion->save();
            $interaccion->evaluacion_id =  $evaluacion->id;
            $interaccion->save();

            DB::commit();
            return redirect(route('editarEvaluacion', $evaluacion->consecutivo));
        } 
        catch (Exception $e) 
        {
            DB::rollBack();
            Alert::error('Error', 'Ocurrió un error al guardar los datos.')->persistent(true);
            return redirect()->back();
        }
    }

    public function editarEvaluacion($consecutivo){
        $evaluacion = Evaluacion::where('consecutivo', $consecutivo)->first();
        $atributos = Atributo::all();
        dd($atributos);
        return view('evaluacion.editarEvaluacion', compact('evaluacion'));
    }
}
