@extends('base.base')

@section('content')
<h2 class="text-center">Detalle Evaluación Presencial</h2>

    <div class="container-fluid">
        <div class="row mb-3">
            <div class="card card-generalInfoQM">
                <div class="card-header">
                    <h5 class="card-header card-titleQM text-center">Datos Principales</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <label>A continuacion se muestran los datos correspondientes a la evaluacion realizada:</label>
                        <div class="col">
                            <table class="table table-responsive tableDataQuality text-center">
                                <thead>
                                    <tr>
                                        <th>Consecutivo</th>
                                        <th>Canal</th>
                                        <th>Matriz</th>
                                        <th>ID Llamada</th>
                                        <th>Fecha Registro</th>
                                        <th>Notas</th>
                                        <th>Nota Total Evaluación</th>
                                    </tr>
                                    <tr>
                                        <td>{{ $evaluacion->consecutivo }}</td>
                                        <td>{{ $evaluacion->matriz->canal->descripcion }}</td>
                                        <td>{{ $evaluacion->matriz->descripcion }}</td>
                                        <td>{{ $evaluacion->llamada_id }}</td>
                                        <td>{{ $evaluacion->fecha_registro }}</td>
                                        <td style="white-space: nowrap;">
                                            @foreach($evaluacion->notas_atributos as $notas)
                                                {{ $notas->atributo->abreviatura }}  {{ $notas->nota }} @if (!$loop->last) | @endif
                                            @endforeach
                                        </td>
                                        <td>{{ $evaluacion->nota_total }}</td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label>Observaciones:</label>
                            <textarea class="form-control" name="observations" id="observations" rows="3" disabled>{{ $evaluacion->observaciones }}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label>Aspectos Positivos:</label>
                            <textarea class="form-control" name="positiveAspects" id="positiveAspects" rows="3" disabled>{{ $evaluacion->aspectos_positivos }}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>Aspectos a Mejorar:</label>
                            <textarea class="form-control" name="improveAspects" id="improveAspects" rows="3" disabled>{{ $evaluacion->aspectos_a_mejorar }}</textarea>
                        </div>
                    </div>
                    <div id="divCompromisos">
                        <form method="post" action="{{ route('aprobarEvaluacion') }}">
                            @csrf

                            <input type="number" class="d-none" name="evaluacion_id" id="evaluacion_id" value="{{ $evaluacion->id }}">

                            <div class="row mt-4">
                                <div class="col">
                                    <label>Comentarios agente:</label>
                                    <textarea class="form-control" name="comentarios" id="comentarios" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col mb-4 text-center">
                                    <button type="submit" class="btn btn-success" id="btnContinuarAprobacionEvaluacion">
                                        Continuar Aprobación Evaluación
                                    </button>
                                </div>
                            </div>
                        </form> 
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

