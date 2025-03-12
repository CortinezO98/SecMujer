@extends('base.base') 

@section('content')
@php
    $userAgent = session('user_SecMoviliad');
    $userRecord = request()->get('getUserLogin');
@endphp

<h2 class="text-center pt-3">Evaluación Calidad de Proceso</h2>

<div class="container-fluid">
    <div class="row mb-3">
        <div class="card card-generalInfoQM">
            <div class="card-body">
                <div class="row">
                    <form method="get" action="{{ route('viewAgente') }}">
                        {{-- @csrf --}}
                        <div class="text-center">
                            <label class="form-label"><b>Filtro Rango Fechas:</b></label>
                            <p>Seleccione la fecha inicial y la fecha final para ver las evaluaciones correspondientes a ese rango de fechas.</p>
                        </div>
                        <div class="row text-center">
                            <div class="col-sm-6 offset-lg-2 col-lg-2 py-1">
                                <label for="fechaInicio" class="pt-2">Fecha Inicio:</label>
                            </div>
                            <div class="col-sm-6 col-lg-2 py-1">
                                <input type="date" class="form-control" name="fechaInicio" id="fechaInicio" required>
                            </div>
                            <div class="col-sm-6 col-lg-2 py-1">
                                <label for="fechaFin"class="pt-2">Fecha Fin:</label>
                            </div>
                            <div class="col-sm-6 col-lg-2 py-1">
                                <input type="date" class="form-control" name="fechaFin" id="fechaFin" required>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-warning">Filtrar</button>

                            <a href="{{ route('viewAgente') }}" class="btn btn-warning">
                                <i class="bi bi-x-octagon"></i> Limpiar filtros
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="card card-generalInfoQM">
            <div class="card-header">
                <h5 class="card-titleQM">Información Evaluaciones de Calidad</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="tableDataEvaluationsAgent" class="table tableDataQuality text-center">
                        <thead>
                            <tr>
                                <th>Consecutivo</th>
                                <th>Estado Evaluación</th>
                                <th>Canal</th>
                                <th>Matriz</th>
                                <th>Tipo de Monitoreo</th>
                                <th>Agente</th>
                                <th>Fecha Registro</th>
                                <th>Notas</th>
                                <th>Observaciones</th>
                                <th>Aspectos Positivos</th>
                                <th>Aspectos a Mejorar</th>
                                <th>Comentarios</th>
                                <th>Compromisos</th>
                                <th>Registrado por</th>
                                <th>Fecha Evaluación</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($evaluaciones as $evaluacion)
                                <tr>
                                    <td>{{ $evaluacion->consecutivo }}</td>
                                    <td>{{ $evaluacion->estado_evaluacion->descripcion }}</td>
                                    <td>{{ $evaluacion->matriz->canal->descripcion }}</td>
                                    <td>{{ $evaluacion->matriz->descripcion }}</td>
                                    <td>{{ $evaluacion->tipo_monitoreo->descripcion }}</td>
                                    <td>{{ $evaluacion->agente->name }}</td>
                                    <td>{{ $evaluacion->fecha_registro }}</td>
                                    <td style="white-space: nowrap;">
                                        {{ $evaluacion->mostrarNotas() }}
                                    </td>
                                    <td>{{ $evaluacion->observaciones }}</td>
                                    <td>{{ $evaluacion->aspectos_positivos }}</td>
                                    <td>{{ $evaluacion->aspectos_a_mejorar }}</td>
                                    <td>{{ $evaluacion->comentarios }}</td>
                                    <td>{{ $evaluacion->compromisos }}</td>
                                    <td>{{ $evaluacion->usuario_registro->name }}</td>
                                    <td style="white-space: nowrap;">
                                        {{ $evaluacion->fecha_registro }}
                                    </td>
                                    <td>
                                        <a href="{{ route('detalleEvaluacion', $evaluacion->consecutivo) }}" class="btn btn-info btn-sm">
                                            Ver Detalle Evaluación
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>   
</div>

@include('base.paginacion') 

@endsection
