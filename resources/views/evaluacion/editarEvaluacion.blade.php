@extends('base.base')

@section('content')
    <h2 class="text-center">Evaluación Inbound</h2>
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="card card-generalInfoQM">
                    <div class="card-header">
                        <h5 class="card-header card-titleQM text-center">Datos del Evaluado</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <label>A continuacion se muestran los datos que se van a registrar para la evaluacion:</label>
                            <div class="col">
                                <table class="table table-responsive tableDataQuality text-center">
                                    <thead>
                                        <tr>
                                            <th>Canal</th>
                                            <th>Matriz</th>
                                            <th>Tipo de Monitoreo</th>
                                            <th>Agente</th>
                                            <th>Consecutivo</th>
                                            <th>Fecha Registro</th>
                                        </tr>
                                        <tr>
                                            <td>{{ $evaluacion->matriz->canal->descripcion }}</td>
                                            <td>{{ $evaluacion->matriz->descripcion }}</td>
                                            <td>{{ $evaluacion->tipo_monitoreo->descripcion }}</td>
                                            <td>{{ $evaluacion->agente->name }}</td>
                                            <td>{{ $evaluacion->consecutivo }}</td>
                                            <td>{{ $evaluacion->fecha_registro }}</td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <form method="post" action="{{ Route('guardarEvaluacion') }}">
                @csrf

                <div class="row mb-3">
                    <div class="card card-generalInfoQM">
                        <div class="card-header">
                            <h5 class="card-header card-titleQM text-center">Datos de la Mujer</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label>A continuación se registrarán los datos de la mujer que se asociarán a la evaluación:</label>
                                <div class="col">
                                        <table class="table table-responsive tableDataQuality text-center">
                                            <thead>
                                                <tr>
                                                    <th>Llamada ID <span class="text-danger">*</span></th>
                                                    <th>Teléfono Mujer <span class="text-danger">*</span></th>
                                                    <th>Identificación Mujer</th>
                                                    <th>Nombre Mujer</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <input type="text" name="llamada_id" id="llamada_id" class="form-control" required>
                                                    </td>
                                                    <td>
                                                        <input type="number" name="mujer_telefono" id="mujer_telefono" class="form-control" required>
                                                    </td>
                                                    <td>
                                                        <input type="number" name="mujer_identificacion" id="mujer_identificacion" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="mujer_nombre" id="mujer_nombre" class="form-control">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row mb-3" id="tablaMatrizInbound">
                    <div class="card card-generalInfoQM">
                        <div class="card-header">
                            <h5 class="card-header card-titleQM text-center">Datos de Evaluación</h5>
                        </div>
                        <div class="card-body">
                                <input type="number" class="d-none" name="evaluacion_id" id="evaluacion_id" value="{{ $evaluacion->id }}">

                                <div class="row">
                                    <div class="col">
                                        <table class="table table-bordered tableDataQualityEvaluation">
                                            <th id="tituleDataQualityEvaluation">Atributo</th>
                                            <th id="tituleDataQualityEvaluation">Peso Ponderado</th>
                                            <th id="tituleDataQualityEvaluation">Peso Item</th>
                                            <th id="tituleDataQualityEvaluation">item</th>
                                            <th id="tituleDataQualityEvaluation">Diccionario de Conceptos</th>
                                            <th id="tituleDataQualityEvaluation">Cumple</th>
                                            <th id="tituleDataQualityEvaluation">No Cumple</th>
                                            @foreach($atributos as $atributo)
                                                <tr>
                                                    <td rowspan="{{ $atributo->cantidadSubItems() }}">{{ $atributo->descripcion  }}  </td>
                                                    <td rowspan="{{ $atributo->cantidadSubItems() }}">{{ $atributo->peso  }}% </td>
        
                                                    <td rowspan="{{ count($atributo->items->first()->subitems) }}">{{$atributo->items->first()->peso}}%</td>
                                                    <td rowspan="{{ count($atributo->items->first()->subitems) }}">{{$atributo->items->first()->descripcion}}</td>
        
                                                    <td>{{$atributo->items->first()->subitems->first()->descripcion}}</td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" 
                                                            name="subitem-{{ $atributo->items->first()->subitems->first()->id }}" 
                                                            id="subitem{{ $atributo->items->first()->subitems->first()->id }}-1" value="1" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" 
                                                            name="subitem-{{ $atributo->items->first()->subitems->first()->id }}" 
                                                            id="subitem{{ $atributo->items->first()->subitems->first()->id }}-0" value="0">
                                                        </div>
                                                    </td>
                                                </tr>
        
                                                @foreach($atributo->items as $item)
                                                    @if(!$loop->first) 
                                                        <tr>
                                                            <td rowspan="{{ count($item->subitems) }}">{{ $item->peso }}%</td>
                                                            <td rowspan="{{ count($item->subitems) }}">{{ $item->descripcion }}</td>
                                                            <td>{{ $item->subitems->first()->descripcion }}</td>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" 
                                                                    name="subitem-{{ $item->subitems->first()->id }}" 
                                                                    id="subitem{{ $item->subitems->first()->id }}-1" value="1" checked>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" 
                                                                    name="subitem-{{ $item->subitems->first()->id }}" 
                                                                    id="subitem{{ $item->subitems->first()->id }}-0" value="0">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endif 
        
                                                    @foreach($item->subitems as $subitem)
                                                        @if(!$loop->first) 
                                                            <tr>
                                                                <td>{{ $subitem->descripcion }}</td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" 
                                                                        name="subitem-{{ $subitem->id }}" 
                                                                        id="subitem{{ $subitem->id }}-1" value="1" checked>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" 
                                                                        name="subitem-{{ $subitem->id }}" 
                                                                        id="subitem{{ $subitem->id }}-0" value="0">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @endif 
                                                    @endforeach
                                                @endforeach
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-3">
                                        <label>Observaciones:</label>
                                        <textarea class="form-control" name="observaciones" id="observaciones" rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-3">
                                        <label>Aspectos Positivos:</label>
                                        <textarea class="form-control" name="aspectos_positivos" id="aspectos_positivos" rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label>Aspectos a Mejorar:</label>
                                        <textarea class="form-control" name="aspectos_a_mejorar" id="aspectos_a_mejorar" rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="pt-4 text-center">
                                    <button type="submit" class="btn btn-primary">Evaluar</button>
                                    <a href="{{ route('eliminarEvaluacion', $evaluacion->id) }}" class="btn btn-outline-danger">Cancelar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <hr>
            <hr>
            <hr>
        <div>
@endsection