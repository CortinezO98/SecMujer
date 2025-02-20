@extends('base.base')

@section('content')
    <h2 class="text-center">Evaluación Inbound</h2>
    <form method="post" id="formEvaluationInbound">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="card card-generalInfoQM">
                    <div class="card-header">
                        <h5 class="card-header card-titleQM text-center">Datos del Evaluado</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <label>A continuacion se muestran los datos que se van a registrar para la evaluacion:</label>
                            <div class="col">
                                <table class="table table-responsive tableDataQuality text-center">
                                    <thead>
                                        <tr>
                                            <th>Canal</th>
                                            <th>Matriz</th>
                                            <th>Tipo de Monitoreo</th>
                                            <th>Agente</th>
                                            <th>Número Interacción</th>
                                            <th>Fecha Interacción</th>
                                        </tr>
                                        <tr>
                                            {{-- <td><?php echo $nombreCanal; ?></td>
                                            <td><?php echo $nombreMatriz; ?></td>
                                            <td><?php echo $nombreTipoMonitoreo; ?></td>
                                            <td><?php echo $nombreAgente; ?></td>
                                            <td><?php echo $idInteraccion; ?></td>
                                            <td><?php echo $fechaInteraccion; ?></td> --}}

                                            <td>{{ $evaluacion->matriz->canal->descripcion }}</td>
                                            <td>{{ $evaluacion->matriz->descripcion }}</td>
                                            <td>{{ $evaluacion->tipo_monitoreo->descripcion }}</td>
                                            <td>{{ $evaluacion->agente->name }}</td>
                                            <td>{{ $evaluacion->interaccion->numero }}</td>
                                            <td>{{ $evaluacion->interaccion->fecha_interaccion }}</td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3" id="tablaMatrizInbound">
                <div class="card card-generalInfoQM">
                    <div class="card-header">
                        <h5 class="card-header card-titleQM text-center">Datos de Evaluación</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <table class="table tableDataQualityEvaluation">
                                    <th id="tituleDataQualityEvaluation">Atributo</th>
                                    <th id="tituleDataQualityEvaluation">Peso Ponderado</th>
                                    <th id="tituleDataQualityEvaluation">Peso Item</th>
                                    <th id="tituleDataQualityEvaluation">item</th>
                                    <th id="tituleDataQualityEvaluation">Diccionario de Conceptos</th>
                                    <th id="tituleDataQualityEvaluation">Cumple</th>
                                    <th id="tituleDataQualityEvaluation">No Cumple</th>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label>Observaciones:</label>
                                <textarea class="form-control" name="observations" id="observations" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label>Aspectos Positivos:</label>
                                <textarea class="form-control" name="positiveAspects" id="positiveAspects" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label>Aspectos a Mejorar:</label>
                                <textarea class="form-control" name="improveAspects" id="improveAspects" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div>
    </form>
@endsection