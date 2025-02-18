@extends('base.base')

@section('content')
    <h2 class="text-center">Nuevo Monitoreo Sin Tipificación</h2>

    <form method="post" id="formDataInitEvaluationNoTypification">
        @csrf 
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="card card-generalInfoQM">
                    <div class="card-header text-center">
                        <h5 class="card-header card-titleQM">Datos Nuevo Monitoreo</h5>
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

                                <label for="">Fecha Interacción:</label>
                                <input class="form-control mb-3" type="date" name="interactionDate" id="interactionDate" required>

                                <label for="">Agente:</label>
                                <select class="form-select mb-3" name="agentName" id="agentName" required></select>

                                <input type="submit" class="btn text-bg-warning" value="Continuar Evaluación" id="buttonNextFormNoTypification">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <input type="hidden" name="userRecord" id="userRecord" value="{{ $userLogin }}">
            </div>
        </div>
    </form>
@endsection
