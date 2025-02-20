@extends('base.base')

@section('content')
<h2 class="text-center">Nuevo Monitoreo</h2>

<form method="post" id="formDataInitEvaluation">
    @csrf
    <div class="container-fluid">
        <div class="row mb-3">
            <div class="card card-generalInfoQM">
                <div class="card-header">
                    <h5 class="card-header text-center card-titleQM">Datos Nuevo Monitoreo</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h3>Canal y Matriz</h3>
                            <label>Seleccione un canal:</label>
                            <select class="form-select mb-3" name="canalQM" id="canalQM" required></select>
                            <label>Seleccione una matriz:</label>
                            <select class="form-select mb-3" name="matrizQM" id="matrizQM" required></select>
                            <label for="">Tipo de Monitoreo:</label>
                            <select class="form-select mb-3" name="monitoringType" id="monitoringType" required></select>
                            <label>Ingrese número de contacto a consultar:</label>
                            <div class="input-group inputGroupSearchID">
                                <button class="btn text-bg-warning" id="btnSearchID">Consultar</button>
                                <input class="form-control" type="text" name="searchIDInteraction" id="searchIDInteraction">
                            </div>
                            <div id="resultSearchIDInteraction"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
