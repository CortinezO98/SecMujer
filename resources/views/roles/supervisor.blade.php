@extends('base.base')

@section('content')
    <h2 class="text-center tittle">Gestión de Calidad</h2>
    <div class="container-fluid seccion">
        <div class="row">
            <div class="col-mb-6 text-center botones-menu">
                <a href="{{ route('nuevoMonitoreo', ['userLogin' => Auth::user()?->name]) }}" class="btn btn-warning-custom">
                    <i class="bi bi-plus"></i> Nuevo Monitoreo
                </a>
                <a href="{{ route('MonitoreoNoTipificacion', ['userLogin' => Auth::user()?->name]) }}" class="btn btn-warning-custom">
                    <i class="bi bi-file-earmark-spreadsheet"></i> Nuevo monitoreo sin tipificación
                </a>
                <label class="btn btn-warning-custom" id="btnPendientes"><i class="bi bi-person-dash"></i> Pendientes <span class="countNotifications" id="countPendingSupervisor"></span></label>
                <label class="btn btn-warning-custom"><i class="bi bi-person-slash"></i> Refutados <span class="countNotifications" id="countRefutationSupervisor"></span></label>
                <a class="btn btn-warning-custom" id="menuBotonesExportarCanales"><i class="bi bi-chevron-down"></i> Exportar reporte por canal</a>
            </div>
        </div>

        <form method="post" id="formExportsChannels" style="display: none;">  </form>
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
        
        <form method="post" id="formSearchQualityManagement">
            <div class="row botones-menu m-2">
                <label class="form-label labelFiltroBusqueda w-25" for="seach"><b>Filtro Busqueda:</b></label>
                <select class="form-select selectFiltroBusqueda w-50" name="filterSearch" id="filterSearch">
                    <option value="" selected></option>
                    <option value="filterConsecutive">Consecutivo</option>
                    <option value="filterNumInteraction">Número Interacción</option>
                    <option value="filterNameAgent">Agente</option>
                    <option value="filterRangeDate">Rango Fechas</option>
                </select><br>
            </div>
            <div class="row botones-menu" id="divSearchConseNumInterHide" style="display: none;" >
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuBotonesExportarCanales = document.getElementById('menuBotonesExportarCanales');
            const btnsExportarCanales = document.getElementById('btnsExportarCanales');
    
            menuBotonesExportarCanales.addEventListener('click', () => {
                btnsExportarCanales.style.display = (btnsExportarCanales.style.display === 'none' || btnsExportarCanales.style.display === '') ? 'block' : 'none';
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterSearch = document.getElementById('filterSearch');
            const divSearchConseNumInter = document.getElementById('divSearchConseNumInterHide');
            const divSearchAgent = document.getElementById('divSearchAgentHide');
            const divSearchRangeDate = document.getElementById('divSearchRangeDateHide');
    
            filterSearch.addEventListener('change', function() {
                divSearchConseNumInter.style.display = 'none';
                divSearchAgent.style.display = 'none';
                divSearchRangeDate.style.display = 'none';
                
                if (this.value === 'filterConsecutive' || this.value === 'filterNumInteraction') {
                    divSearchConseNumInter.style.display = 'block';
                } else if (this.value === 'filterNameAgent') {
                    divSearchAgent.style.display = 'block';
                } else if (this.value === 'filterRangeDate') {
                    divSearchRangeDate.style.display = 'block';
                }
            });
        });
    </script>
@endsection