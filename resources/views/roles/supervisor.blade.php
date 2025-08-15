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
                <a class="btn btn-warning-custom" id="menuBotonesExportarMatriz">
                    <i class="bi bi-chevron-double-down"></i> Exportar reporte por matriz
                </a>
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
                        <option value="" selected></option>
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

        <form method="get" action="{{ route('exportarReportePorMatriz') }}" id="exportFormMatriz" style="display: none;">
            @csrf
            <div class="row">
                <div class="col-md-4 my-2">
                    <label for="canal_id_matriz" class="form-label text-white">Seleccione el canal:</label>
                    <select class="form-select" name="canal_id" id="canal_id_matriz" required>
                        <option value="">Seleccione un canal</option>
                        {{-- Canales cargados dinámicamente --}}
                    </select>
                </div>
                <div class="col-md-4 my-2">
                    <label for="matriz_id" class="form-label text-white">Seleccione la matriz:</label>
                    <select class="form-select" name="matriz_id" id="matriz_id" required>
                        <option value="">Seleccione una matriz</option>
                        {{-- Matrices cargadas dinámicamente --}}
                    </select>
                </div>
                <div class="col-md-4 my-2">
                    <label for="fechaInicioM" class="form-label text-white">Fecha Inicio:</label>
                    <input type="date" class="form-control" name="fechaInicio" id="fechaInicioM" required>
                </div>
                <div class="col-md-4 my-2">
                    <label for="fechaFinM" class="form-label text-white">Fecha Fin:</label>
                    <input type="date" class="form-control" name="fechaFin" id="fechaFinM" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col text-center">
                    <button type="submit" class="btn btn-warning-custom">
                        <i class="bi bi-file-earmark-spreadsheet"></i> Exportar Reporte por Matriz
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
            exportForm.style.display = exportForm.style.display === "none" ? "block" : "none";
        });

        const exportButtonMatriz = document.getElementById("menuBotonesExportarMatriz");
        const exportFormMatriz = document.getElementById("exportFormMatriz");

        exportButtonMatriz.addEventListener("click", function () {
            exportFormMatriz.style.display = exportFormMatriz.style.display === "none" ? "block" : "none";
        });

        // ✅ Cargar canales para el formulario de matriz
        $.ajax({
            url: '/monitoreo/canales',
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                let canalSelect = $('#canal_id_matriz');
                canalSelect.empty().append('<option value="">Seleccione un canal</option>');
                data.sort((a, b) => a.descripcion.localeCompare(b.descripcion));
                $.each(data, function (key, canal) {
                    canalSelect.append('<option value="' + canal.id + '">' + canal.descripcion + '</option>');
                });
            }
        });

        // ✅ Cargar matrices según canal seleccionado
        $('#canal_id_matriz').change(function () {
            let canalId = $(this).val();
            let matrizSelect = $('#matriz_id');
            matrizSelect.empty().append('<option value="">Seleccione una matriz</option>');

            if (canalId) {
                $.ajax({
                    url: '/monitoreo/matrices/' + canalId,
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        data.sort((a, b) => a.descripcion.localeCompare(b.descripcion));
                        $.each(data, function (key, matriz) {
                            matrizSelect.append('<option value="' + matriz.id + '">' + matriz.descripcion + '</option>');
                        });
                    }
                });
            }
        });

        // ✅ Manejo del filtro
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
                    url: '/user/obtenerAgentes/0',
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
            valor.style.display = mostrar ? "block" : "none";
            valor.required = mostrar;
            valor.value = "";
        }

        function cambiarVisibilidadSelectAgente(mostrar) {
            selectAgente.style.display = mostrar ? "block" : "none";
            selectAgente.required = mostrar;
        }

        function cambiarVisibilidadSelectorFechas(mostrar) {
            selectorFechas.style.display = mostrar ? "block" : "none";
        }
    });
    </script>


@endsection
