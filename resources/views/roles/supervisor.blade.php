@extends('base.base')

@php
    use App\Enums\EstadosEvaluaciones;
@endphp

@section('content')
    <h2 class="text-center tittle">Gestión de Calidad</h2>
    <div class="container seccion">
        <div class="row">
            <div class="col-mb-6 text-center botones-menu">
                <a href="{{ route('NuevoMonitoreo') }}" class="btn btn-warning-custom">
                    <i class="bi bi-file-earmark-spreadsheet"></i> Nuevo monitoreo 
                </a>
                <a href="{{ route('viewSupervisor', ['filtro' => 'estado_evaluacion_id', 'valor' => EstadosEvaluaciones::Pendiente->value]) }}" class="btn btn-warning-custom">
                    <i class="bi bi-hourglass-split"></i> Pendientes
                </a>
                <a href="{{ route('viewSupervisor', ['filtro' => 'estado_evaluacion_id', 'valor' => EstadosEvaluaciones::Evaluado->value]) }}" class="btn btn-warning-custom">
                    <i class="bi bi-clipboard-check"></i> Evaluados
                </a>
                <a class="btn btn-warning-custom" id="menuBotonesExportarCanales"><i class="bi bi-chevron-down"></i> Exportar reporte por canal</a>
                <a href="{{ route('viewSupervisor') }}" class="btn btn-warning-custom">
                    <i class="bi bi-x-octagon"></i> Limpiar filtros
                </a>
            </div>
        </div>

        <form method="post">            
            <div class="row botonesExportarCanalesOcultar" id="btnsExportarCanales" style="display: none;">
                <div class="row row-centered">
                    <div class="col-md-6">
                        <label class="form-label text-white" for="selectChannel">Seleccione el canal que desea exportar:</label>
                    </div>
                </div>

                <div class="row row-centered">
                    <div class="col-md-6">
                        <select class="form-select" name="selectChannel" id="selectChannel">
                            <option value="" selected></option>
                            <option value="optionInbound">Inbound</option>
                            <option value="optionOutbound">Outbound</option>
                            <option value="optionVirtual">Virtual</option>
                            <option value="optionPresencial">Presencial</option>
                        </select>
                    </div>
                </div>

                <div class="row row-centered">
                    <div class="col-md-6">
                        <div class="date-inputs-container">
                            <div class="date-inputs">
                                <label for="dateStartChannel">Fecha Inicio:</label>
                                <input type="date" name="dateStartChannel" id="dateStartChannel" required>
                                <label for="dateEndChannel">Fecha Fin:</label>
                                <input type="date" name="dateEndChannel" id="dateEndChannel" required>
                            </div>
                            <button class="btn btn-warning-custom" id="btnChannelDateRange">Exportar Reporte</button>
                        </div>
                    </div>
                </div>
            </div>

        </form>
        
        <form method="get" action="{{ route('viewSupervisor') }}">

            <div class="row mt-3 align-items-center">
                <div class="col-sm-0 col-lg-2"></div>

                <div class="col-sm-12 col-lg-2 py-1 text-center ">
                    <h5 class="pt-2">Filtro Busqueda:</h5>
                </div>

                <div class="col-sm-12 col-lg-2 py-1">
                    <select class="form-select" name="filtro" id="filtro">
                        <option value="" selected></option>
                        <option value="consecutivo">Consecutivo</option>
                        <option value="llamada_id">ID Llamada Mujer</option>
                        <option value="mujer_telefono">Numero de Telefono Mujer</option>
                        <option value="agente">Agente</option>
                        <option value="rangoFechas">Rango Fechas</option>
                    </select>
                </div>

                <div class="col-sm-12 col-lg-3 py-1">
                    <input type="text" class="form-control" name="valor" id="valor" required>
                </div>
                <div class="col-sm-12 col-lg-1 py-1">
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-warning btn-block" >Buscar</button>
                    </div>
                </div>
            </div>

            {{-- <div class="row botones-menu m-2">
                <label class="form-label labelFiltroBusqueda w-25" for="seach"><b>Filtro Busqueda:</b></label>
                <select class="form-select selectFiltroBusqueda w-50" name="filterSearch" id="filterSearch">
                    <option value="" selected></option>
                    <option value="filterConsecutive">Consecutivo</option>
                    <option value="llamada_id">ID Llamada Mujer</option>
                    <option value="mujer_telefono">Numero de Telefono Mujer</option>
                    <option value="filterNameAgent">Agente</option>
                    <option value="filterRangeDate">Rango Fechas</option>
                </select><br>
            </div> --}}
            {{-- <div class="row botones-menu" id="divSearchConseNumInterHide" style="display: none;" >
                <div class="containerFiltersSearch input-group inputGroupFiltroBusqueda ">
                    <button class="btn text-bg-warning" id="btnSearch">Buscar</button>
                    <input class="form-control form-control-sm" type="text" name="dataSearch" id="dataSearch">
                </div>
            </div>
            <div class="row" id="divSearchAgentHide" style="display: none;">
                <div class="containerFiltersSearch text-center">
                    <select class="form-select mb-3" name="agentName" id="agentName"></select>
                    <button class="btn text-bg-warning" id="btnSearchAgent">Buscar</button>
                </div>
            </div>
            <div class="row" id="divSearchRangeDateHide" style="display: none;">
                <div class="containerFiltersSearch text-center">
                    <label for="dateStart">Fecha Inicio:</label>
                    <input type="date" name="dateStart" id="dateStart" required>
                    <label for="dateEnd">Fecha Fin:</label>
                    <input type="date" name="dateEnd" id="dateEnd" required>
                    <button class="btn text-bg-warning" id="btnSearchDateRange">Buscar</button>
                </div>
            </div> --}}
        </form>
    </div>

    <div class="container-fluid seccion">
        <div class="table-responsive">
            <table id="tableDataRecordsQuality" class="table tableDataQuality text-center ancho_auto">
                <thead>
                    <tr>
                        <th>Consecutivo</th>
                        <th>ID Llamada</th>
                        <th>Numero de Telefono</th>
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
                    </tr>
                </thead>
                <tbody>
                    @foreach($evaluaciones as $evaluacion)
                        <tr>
                            <td>{{ $evaluacion->consecutivo }}</td>
                            <td>{{ $evaluacion->llamada_id }}</td>
                            <td>{{ $evaluacion->mujer_telefono }}</td>
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
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        
    </script>
@endsection