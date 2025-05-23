@extends('base.base')

@section('content')
    <h2 class="text-center pt-3">Nuevo Monitoreo Sin Tipificación</h2>

    <form method="post" action="{{ route('crearEvaluacion') }}" id="formDataInitEvaluationNoTypification">
        @csrf 
        <div class="container-fluid pt-1">
            <div class="row mb-3">
                <div class="card card-generalInfoQM">
                    <div class="card-header text-center">
                        <h5 class="card-header card-titleQM">Datos Nuevo Monitoreo</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="py-2">Canal y Matriz</h5>
                                
                                @include('monitoreo.moduloFormSelect') 

                                <label for="">Agente:</label>
                                <select class="form-select mb-3" name="agente_id" id="agente_id" required>
                                    <option value="">Seleccione un agente</option>
                                </select>

                                <input type="submit" class="btn text-bg-warning" value="Continuar Evaluación" id="buttonNextFormNoTypification">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('script')
    @include('scripts.selectDatosMonitoreo')
@endsection