<?php

namespace App\Http\Controllers;

use App\Models\Evaluacion;
use App\Enums\EstadosEvaluaciones;
use App\Models\Atributo;
use App\Models\EvaluacionAtributo;
use App\Models\EvaluacionSubItem;
use App\Utilities\Utility;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use RealRashid\SweetAlert\Facades\Alert;
use Exception;


class EvaluacionController extends Controller
{
    public function crearEvaluacion(Request $request)
    {
        $evaluacion = new Evaluacion($request->all());
        $evaluacion->consecutivo = 'EV'.Utility::GenerarConsecutivo();
        $evaluacion->fecha_registro = now();
        $evaluacion->estado_evaluacion_id = EstadosEvaluaciones::Pendiente->value;
        $evaluacion->usuario_registro_id = Auth::id();
        try 
        {
            DB::beginTransaction();
            
            $evaluacion->save();

            DB::commit();
            return redirect(route('editarEvaluacion', $evaluacion->consecutivo));
        } 
        catch (Exception $e) 
        {
            DB::rollBack();
            dd($e);
            Alert::error('Error', 'Ocurrió un error al guardar los datos.')->persistent(true);
            return redirect()->back();
        }
    }

    public function editarEvaluacion($consecutivo){
        $evaluacion = Evaluacion::where('consecutivo', $consecutivo)->first();
        $atributos = Atributo::where('matriz_id', $evaluacion->matriz_id)->get();
        // dd($atributos);
        return view('evaluacion.editarEvaluacion', compact('evaluacion','atributos'));
    }

    public function guardarEvaluacion(Request $request) {
        $evaluacion = Evaluacion::where('id', $request->evaluacion_id)->first();
        $evaluacion->observaciones = $request->observaciones;
        $evaluacion->aspectos_positivos = $request->aspectos_positivos;
        $evaluacion->aspectos_a_mejorar = $request->aspectos_a_mejorar;
        $evaluacion->llamada_id = $request->llamada_id;
        $evaluacion->mujer_telefono = $request->mujer_telefono;
        $evaluacion->mujer_identificacion = $request->mujer_identificacion;
        $evaluacion->mujer_nombre = $request->mujer_nombre;

        $atributos = Atributo::where('matriz_id', $evaluacion->matriz_id)->get();
        try 
        {
            DB::beginTransaction();
            // dd($request->all());
            $evaluacion->save();
            foreach($atributos as $atributo){
                foreach ($atributo->items as $item){
                    foreach ($item->subitems as $subitem){
                        $valor = $request->get('subitem-'.$subitem->id);
                        if ($valor != null){
                            $this->CreateUpdateEvaluacionSubItem($evaluacion->id, $subitem->id, $valor);
                        }
                    }
                }
            }
            $this->CalcularNotas($evaluacion);
            DB::commit();
            Alert::success('Exitó', 'La evaluación se guardó correctamente.')->persistent(true);
            return redirect(route('home'));
        } 
        catch (Exception $e)
        {
            DB::rollBack();
            dd($e);
            Alert::error('Error', 'Ocurrió un error al guardar los datos.')->persistent(true);
            return redirect()->back();
        }
    }

    public function CalcularNotas($evaluacion) {
        $nota_total = 0;
        foreach($evaluacion->matriz->atributos as $atributo)
        {
            $sumatoriaNotas = 0;
            foreach ($atributo->items as $item)
            {
                $valorPorcentualSubitem = $item->peso / $item->subitems->count();
                $cantidadCumplen = 0;
                foreach ($item->subitems as $subitem)
                {
                    $evaluacionSubItem = EvaluacionSubItem::where([
                        'evaluacion_id' => $evaluacion->id,
                        'sub_item_id'    => $subitem->id,
                    ])->first();
                    if ($evaluacionSubItem && $evaluacionSubItem->cumple){
                        $cantidadCumplen += 1;
                    }
                }
                $sumatoriaNotas += $valorPorcentualSubitem * $cantidadCumplen;
            }
            $this->CreateUpdateEvaluacionAtributo($evaluacion, $atributo, $sumatoriaNotas);
            $nota_total += $sumatoriaNotas;
        }
        $evaluacion->nota_total = $nota_total;
        $evaluacion->save();
    }

    public function eliminarEvaluacion($id) {
        $evaluacion = Evaluacion::find($id);

        if (!$evaluacion) {
            Alert::error('Error', 'No existe la evaluación.')->persistent(true);
            return redirect()->back();
        }
        try 
        {
            DB::beginTransaction();

            $evaluacion->delete();
            
            DB::commit();
        } 
        catch (\Exception $e) 
        {
            DB::rollBack();
            Alert::error('Error', 'No fue posible eliminar la evaluación.')->persistent(true);
            return redirect()->back();
        }    
        return redirect(route('home'));
    }

    public function CreateUpdateEvaluacionSubItem($evaluacion_id, $sub_item_id, $cumple) {
        $evaluacionSubItem = EvaluacionSubItem::where([
            'evaluacion_id' => $evaluacion_id,
            'sub_item_id'    => $sub_item_id,
        ])->first();
        
        if (!$evaluacionSubItem)
        {
            $evaluacionSubItem = new EvaluacionSubItem([
                'evaluacion_id' => $evaluacion_id,
                'sub_item_id'    => $sub_item_id,
            ]);
        } 
        $evaluacionSubItem->cumple = $cumple;
        $evaluacionSubItem->save();
    }

    public function CreateUpdateEvaluacionAtributo($evaluacion, $atributo, $nota){
        $evaluacionAtributo =  EvaluacionAtributo::where([
            'evaluacion_id' => $evaluacion->id,
            'atributo_id' => $atributo->id
        ])->first();

        if (!$evaluacionAtributo){
            $evaluacionAtributo = new EvaluacionAtributo([
                'evaluacion_id' => $evaluacion->id,
                'atributo_id' => $atributo->id
            ]);
        }
        $evaluacionAtributo->nota = $nota;
        $evaluacionAtributo->save();
    }
}
