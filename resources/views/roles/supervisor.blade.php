@extends('base.base')


@section('content')
<h2 class="text-center tittle">Gestión de Calidad</h2>
<form method="post" id="formQualityManagement">
    <div class="container-fluid seccion">
        <div class="row">
            <div class="col-mb-6 text-center botones-menu">
                <a href="newMonitoring.php?getUserLogin=" class="btn btn-warning-custom"><i class="bi bi-plus"></i> Nuevo Monitoreo</a>
                <a href="newMonitoringNoTypification.php?getUserLogin=" class="btn btn-warning-custom"><i class="bi bi-file-earmark-spreadsheet"></i> Nuevo monitoreo sin tipificación</a>
                <label class="btn btn-warning-custom" id="btnPendientes"><i class="bi bi-person-dash"></i> Pendientes <span class="countNotifications" id="countPendingSupervisor"></span></label>
                <label class="btn btn-warning-custom"><i class="bi bi-person-slash"></i> Refutados <span class="countNotifications" id="countRefutationSupervisor"></span></label>
                <a class="btn btn-warning-custom" id="menuBotonesExportarCanales"><i class="bi bi-chevron-down" id=""></i> Exportar reporte por canal</a>
            </div>
        </div>
        <form method="post" id="formExportsChannels">
            <div class="row botonesExportarCanalesOcultar" id="btnsExportarCanales">
        
                <div class="row row-centered">
                    <div class="col-md-6">
                        <label class="form-label" for="selectChannel">Seleccione el canal que desea exportar:</label>
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
        <form method="post" id="formSearchQualityManagement">
        <div class="row botones-menu">
            <label class="form-label labelFiltroBusqueda w-25" for="seach"><b>Filtro Busqueda:</b></label>
            <select class="form-select selectFiltroBusqueda w-50" name="filterSearch" id="filterSearch">
                <option value="" selected></option>
                <option value="filterConsecutive">Consecutivo</option>
                <option value="filterNumInteraction">Número Interacción</option>
                <option value="filterNameAgent">Agente</option>
                <option value="filterRangeDate">Rango Fechas</option>
            </select><br>
        </div>
        </form>
    </div>
    <div class="container-fluid seccion">
        <div class="table-responsive">
            <table id="tableDataRecordsQuality" class="table tableDataQuality text-center ancho_auto">
                <thead>
                    <tr>
                        <th></th>
                        <th>Consecutivo</th>
                        <th>Estado Evaluación</th>
                        <th>Canal</th>
                        <th>Matriz</th>
                        <th>Tipo de Monitoreo</th>
                        <th>Agente</th>
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
                        <th>Observación Final</th>
                        <th>Registrado por</th>
                        <th>Fecha Evaluación</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</form>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        function realizarBusqueda(valor) {
            const searchInput = document.querySelector('#tableDataRecordsQuality_filter input[type="search"]');
            searchInput.value = '';
            searchInput.value = valor;
            searchInput.dispatchEvent(new Event('input'));
        }

        const refutadosButton = document.querySelector('.btn-warning i.bi-person-slash').parentElement;
        refutadosButton.addEventListener('click', function() {
            realizarBusqueda('Refutado');
        });

        const pendientesButton = document.querySelector('#btnPendientes');
        pendientesButton.addEventListener('click', function() {
            realizarBusqueda('Pendiente');
        });
    });
</script>

@endsection