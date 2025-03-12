@extends('base.base')

@php
    use App\Enums\EstadosEvaluaciones;
@endphp

@section('content')
    <h2 class="text-center tittle pt-3">Gestión de Calidad</h2>
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

        <form method="get" action="{{ route('exportarReporteCsv') }}" id="exportForm" style="display: none;">
            @csrf
            <div class="row">
                <div class="col-md-4 my-2">
                    <label for="selectChannel" class="form-label text-white">Seleccione el canal (opcional):</label>
                    <select class="form-select" name="canal_id" id="canal_id">
                        <option value="" selected>Todos</option>
                        <option value="1">Telefonico</option>
                        <option value="2">Whatsapp + Bot</option>
                    </select>
                </div>
                <div class="col-md-4 my-2">
                    <label for="fechaInicio" class="form-label text-white">Fecha Inicio:</label>
                    <input type="date" class="form-control" name="fechaInicio" id="fechaInicio" required>
                </div>
                <div class="col-md-4 my-2">
                    <label for="fechaFin" class="form-label text-white">Fecha Fin:</label>
                    <input type="date" class="form-control" name="fechaFin" id="fechaFin" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col text-center">
                    <button type="submit" class="btn btn-warning-custom">
                        <i class="bi bi-file-earmark-spreadsheet"></i> Exportar Reporte
                    </button>
                </div>
            </div>
        </form>
        
        <form method="get" action="{{ route('viewSupervisor') }}" >

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
                        <option value="agente_id">Agente</option>
                        <option value="rangoFechas">Rango Fechas</option>
                    </select>
                </div>

                <div class="col-sm-12 col-lg-3 py-1">
                    <input type="text" class="form-control" name="valor" id="valor" required>

                    <select class="form-select" name="agente_id" id="agente_id" style="display: none;"></select>

                    <div id="selectorFechas" style="display: none;">
                        <div class="row">
                            <div class="col-6">
                                <input type="date" class="form-control" name="fechaInicio" id="fechaInicio">
                            </div>
                            <div class="col-6">
                                <input type="date" class="form-control" name="fechaFin" id="fechaFin">
                            </div>
                        </div>  
                    </div>

                </div>
                <div class="col-sm-12 col-lg-1 py-1">
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-warning btn-block" >Buscar</button>
                    </div>
                </div>
            </div>            
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
                        <th>Acciones</th>
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
                            <td>
                                <a href="{{ route('editarEvaluacion', $evaluacion->consecutivo) }}"
                                    class="btn btn-primary">
                                    Editar
                                </a>
                                <a href="{{ route('exportarEvaluacionDetalle', $evaluacion->consecutivo) }}"
                                    class="btn btn-success">
                                    Exportar Excel
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>

    @include('base.paginacion') 

    <script>
        document.addEventListener("DOMContentLoaded", function () {
        const exportButton = document.getElementById("menuBotonesExportarCanales");
            const exportForm = document.getElementById("exportForm");

            exportButton.addEventListener("click", function () {
                if (exportForm.style.display === "none" || exportForm.style.display === "") {
                    exportForm.style.display = "block";
                } else {
                    exportForm.style.display = "none";
                }
            });


        const filtro = document.getElementById("filtro");
        const valor = document.getElementById("valor");
        const selectAgente = document.getElementById("agente_id");
        const selectorFechas = document.getElementById("selectorFechas");

        filtro.addEventListener("change", function () {
            if (["consecutivo", "llamada_id", "mujer_telefono"].includes(filtro.value)) {
                
                cambiarVisibilidadInputValor(true);
                cambiarVisibilidadSelectAgente(false);
                cambiarVisibilidadSelectorFechas(false);

            } else if (filtro.value === "agente_id") {

                $.ajax({
                    url: '/user/obtenerAgentes/'+0,
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        let agenteSelect = $('#agente_id');
                        agenteSelect.empty().append('<option value="">Seleccione un agente</option>');
                        $.each(data, function (key, user) {
                            agenteSelect.append('<option value="' + user.id + '">' + user.name + '</option>');
                        });
                    }
                });

                cambiarVisibilidadInputValor(false);
                cambiarVisibilidadSelectAgente(true);
                cambiarVisibilidadSelectorFechas(false);

            } else if (filtro.value === "rangoFechas") {
                
                cambiarVisibilidadInputValor(false);
                cambiarVisibilidadSelectAgente(false);
                cambiarVisibilidadSelectorFechas(true);

            } else {
                cambiarVisibilidadInputValor(true);
                cambiarVisibilidadSelectAgente(false);
                cambiarVisibilidadSelectorFechas(false);
            }
        });

        function cambiarVisibilidadInputValor(mostrar) {
            if (mostrar) {
                valor.style.display = "block";
                valor.required = true;
            } else {
                valor.style.display = "none";
                valor.required = false;
            }
            valor.value = "";
        }

        function cambiarVisibilidadSelectAgente(mostrar) {
            if (mostrar) {
                selectAgente.style.display = "block";
                selectAgente.required = true;
            } else {
                selectAgente.style.display = "none";
                selectAgente.required = false;
            }
        }

        function cambiarVisibilidadSelectorFechas(mostrar) {
            if (mostrar) {
                selectorFechas.style.display = "block";
                selectorFechas.required = true;
            } else {
                selectorFechas.style.display = "none";
                selectorFechas.required = false;
            }
        }
    });

    </script>
@endsection