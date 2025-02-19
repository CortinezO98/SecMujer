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
                                    <th>Tipo Monitoreo</th>
                                    <th>Número Interacción</th>
                                    <th>Fecha Interacción</th>
                                    <th>Nota ENC</th>
                                    <th>Nota ECN</th>
                                    <th>Nota ECUF</th>
                                    <th>Nota ECC</th>
                                    <th>Nota Total Evaluación</th>
                                    <th>Observaciones</th>
                                    <th>Aspectos Positivos</th>
                                    <th>Aspectos a Mejorar</th>
                                    <th>Comentarios Refutación</th>
                                    <th>Compromisos</th>
                                    <th>Observaciones Final</th>
                                    <th>Evaluado por</th>
                                    <th>Fecha Evaluación</th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>

                {{-- Campos ocultos --}}
                <input type="hidden" name="userRecord" id="userRecord" value="{{ $userRecord }}">
                <input type="hidden" name="agentNameQM" id="agentNameQM" value="{{ $userAgent }}">
            </form>
        </div>
    </div>
</div>
@endsection
