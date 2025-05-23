@extends('base.base')

@section('content')
<h2 class="text-center pt-3">Detalle Evaluación Presencial</h2>

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
                                    </tr>
                                    <tr>
                                        <td>{{ $evaluacion->consecutivo }}</td>
                                        <td>{{ $evaluacion->matriz->canal->descripcion }}</td>
                                        <td>{{ $evaluacion->matriz->descripcion }}</td>
                                        <td>{{ $evaluacion->llamada_id }}</td>
                                        <td>{{ $evaluacion->fecha_registro }}</td>
                                        <td style="white-space: nowrap;">
                                            {{ $evaluacion->mostrarNotas() }}
                                        </td>
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

                    
                    
                    @include('evaluacion.descargaDeAdjuntos')

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

                            <div class="row mt-4">
                                <div class="col">
                                    <label>Compromisos:</label>
                                    <textarea class="form-control" name="compromisos" id="compromisos" rows="3"></textarea>
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
                                    <thead>
                                        <th>Atributo</th>
                                        <th>Peso Ponderado</th>
                                        <th>Peso Item</th>
                                        <th>Item</th>
                                        <th>Sub Item</th>
                                        @if($evaluacion->tieneNiveles())
                                            <th>Nivel</th>
                                        @endif
                                        <th>Cumple</th>
                                        <th>No Cumple</th>
                                    </thead>
                                    <tbody>
                                        @if($evaluacion->tieneNiveles())
                                            @include('evaluacion.tablaConNiveles')
                                        @else
                                            @include('evaluacion.tablaSinNiveles')
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

