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

            <form method="post" action="{{ Route('guardarEvaluacion') }}" enctype="multipart/form-data">
                @csrf
                <input type="number" class="d-none" name="evaluacion_id" id="evaluacion_id" value="{{ $evaluacion->id }}">
                
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
                                                        <input type="text" name="llamada_id" id="llamada_id" class="form-control" value="{{ $evaluacion->llamada_id }}" required>
                                                    </td>
                                                    <td>
                                                        <input type="number" name="mujer_telefono" id="mujer_telefono" class="form-control" value="{{ $evaluacion->mujer_telefono }}" required>
                                                    </td>
                                                    <td>
                                                        <input type="number" name="mujer_identificacion" id="mujer_identificacion" value="{{ $evaluacion->mujer_identificacion }}" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="mujer_nombre" id="mujer_nombre" value="{{ $evaluacion->mujer_nombre }}" class="form-control">
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
                                <div class="row">
                                    <div class="col mb-3">
                                        <label>Observaciones:</label>
                                        <textarea class="form-control" name="observaciones" id="observaciones" rows="2">{{ $evaluacion->observaciones }}</textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-3">
                                        <label>Aspectos Positivos:</label>
                                        <textarea class="form-control" name="aspectos_positivos" id="aspectos_positivos" rows="2">{{ $evaluacion->aspectos_positivos }}</textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label>Aspectos a Mejorar:</label>
                                        <textarea class="form-control" name="aspectos_a_mejorar" id="aspectos_a_mejorar" rows="2">{{ $evaluacion->aspectos_a_mejorar }}</textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col py-3">
                                        <label for="archivos">Selecciona los archivos:</label>
                                        <input type="file" name="archivos[]" id="archivos" class="form-control" multiple>
                                    </div>

                                </div>
                                
                                @include('evaluacion.descargaDeAdjuntos')

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