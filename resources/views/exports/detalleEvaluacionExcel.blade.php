<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Detalle Evaluación Excel</title>
    <style>
        /* Estilos basados en los colores de la página */
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            color: #212529;
            margin: 0;
            padding: 0;
        }
        h2 {
            background-color: #ffc107; /* Color warning */
            color: #fff;
            padding: 10px;
            text-align: center;
            margin-bottom: 20px;
        }
        .section-title {
            background-color: #ffc107;
            color: #fff;
            font-weight: bold;
            padding: 5px;
            margin-bottom: 5px;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 15px;
        }
        table, th, td {
            border: 1px solid #dee2e6;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f8f9fa;
            color: #212529;
        }
    </style>
</head>
<body>
    <h2>Detalle Evaluación Presencial</h2>

    <!-- Datos Principales -->
    <div>
        <div class="section-title">Datos Principales</div>
        <table>
            <thead>
                <tr>
                    <th>Consecutivo</th>
                    <th>Canal</th>
                    <th>Matriz</th>
                    <th>ID Llamada</th>
                    <th>Fecha Registro</th>
                    <th>Notas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $evaluacion->consecutivo }}</td>
                    <td>{{ $evaluacion->matriz->canal->descripcion }}</td>
                    <td>{{ $evaluacion->matriz->descripcion }}</td>
                    <td>{{ $evaluacion->llamada_id }}</td>
                    <td>{{ $evaluacion->fecha_registro }}</td>
                    <td>{{ $evaluacion->mostrarNotas() }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Observaciones y Aspectos -->
    <div>
        <div class="section-title">Observaciones y Aspectos</div>
        <table>
            <thead>
                <tr>
                    <th>Observaciones</th>
                    <th>Aspectos Positivos</th>
                    <th>Aspectos a Mejorar</th>
                    <th>Observación Final</th>
                    <th>Compromisos</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $evaluacion->observaciones }}</td>
                    <td>{{ $evaluacion->aspectos_positivos }}</td>
                    <td>{{ $evaluacion->aspectos_a_mejorar }}</td>
                    <td>{{ $evaluacion->comentarios }}</td>
                    <td>{{ $evaluacion->compromisos }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Datos de Evaluación -->
    <div>
        <div class="section-title">Datos de Evaluación</div>
        <table>
            <thead>
                <tr>
                    <th>Atributo</th>
                    <th>Peso Ponderado</th>
                    <th>Peso Item</th>
                    <th>Item</th>
                    <th>Sub Item</th>
                    @if($evaluacion->tieneNiveles())
                        <th>Nivel</th>
                    @endif
                    <th>Cumple</th>
                    <th>No Cumple</th>
                </tr>
            </thead>
            <tbody>
                @if($evaluacion->tieneNiveles())
                    @include('exports.tablaConNivelesExcel')
                @else
                    @include('exports.tablaSinNivelesExcel')
                @endif
            </tbody>
        </table>
    </div>
</body>
</html>
