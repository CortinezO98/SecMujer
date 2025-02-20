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

                                @include('monitoreo.moduloFormSelect') 

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

@section('script')
    @include('scripts.selectDatosMonitoreo') 
@endsection