@extends('base.base') 

@section('content')
@php
    $userAgent = session('user_SecMoviliad');
    $userRecord = request()->get('getUserLogin');
@endphp

<h2 class="text-center">Evaluación Calidad de Proceso</h2>

<div class="container-fluid">
    <div class="row mb-3">
        <div class="card card-generalInfoQM">
            <div class="card-body">
                <div class="row">
                    <div class="text-center">
                        <label class="form-label"><b>Filtro Rango Fechas:</b></label>
                        <p>Seleccione la fecha inicial y la fecha final para ver las evaluaciones correspondientes a ese rango de fechas.</p>
                        <p>Para ver las evaluaciones correspondientes al mes de julio, seleccione como fecha inicial <b>01/07/2023</b> y como fecha final <b>31/07/2023</b>.</p>
                    </div>
                    <div class="text-center">
                        <label for="dateStart">Fecha Inicio:</label>
                        <input type="date" name="dateStart" id="dateStart" required>
                        <label for="dateEnd" class="ms-3">Fecha Fin:</label>
                        <input type="date" name="dateEnd" id="dateEnd" required>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-warning mt-3" id="btnFilterDateRangeAgent">Filtrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row mb-3">
        <div class="card card-generalInfoQM">
            <div class="card-header">
                <h5 class="card-titleQM">Información Evaluaciones de Calidad</h5>
            </div>
            <form method="POST" id="formDataEvaluationsAgent">
                @csrf
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
                        <th>Observación Final</th>
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
                                @foreach($evaluacion->notas_atributos as $notas)
                                    {{ $notas->atributo->abreviatura }}  {{ $notas->nota }} @if (!$loop->last) | @endif
                                @endforeach

                            </td>
                            <td>{{ $evaluacion->observaciones }}</td>
                            <td>{{ $evaluacion->aspectos_positivos }}</td>
                            <td>{{ $evaluacion->aspectos_a_mejorar }}</td>
                            <td>{{ $evaluacion->comentarios }}</td>
                            <td>{{ $evaluacion->observacion_final }}</td>
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
            </form>
        </div>
    </div>
</div>
@endsection
