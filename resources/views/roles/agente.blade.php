@extends('base.base')

@section('content')
<div class="container-fluid">
    <h2 class="text-center">Menú de accesos - Agente</h2>
    
    <div class="row" id="containerBtnImg">
        <div class="col-md-4 text-center">
            <div id="btnImgLinks">
                <img src="{{ asset('config/img/edited/btnLink6.png') }}">
                <div class="hover">
                    <h4><a href="{{ url('qualityManagement/qualityManagementAgent') }}?getUserLogin={{ Auth::user()->id }}" target="_blank">Gestión Calidad</a></h4>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-4">
            <h4 class="px-4">
                <a href="{{ url('qualityManagement/qualityManagementAgent') }}?getUserLogin={{ Auth::user()->id }}" target="_blank">
                    Click para ir a Gestión Calidad
                </a>
            </h4>
            <h5 id="monitoringNotification">Tiene <span class="countNotifications">0</span> evaluaciones</h5>
        </div>
    </div>
</div>
@endsection
