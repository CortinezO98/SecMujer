<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvaluacionController;

Route::prefix('evaluacion')->group(function () {
    Route::Post('/crear', [EvaluacionController::class, 'crearEvaluacion'])->name('crearEvaluacion');
    Route::post('/aprobarEvaluacion', [EvaluacionController::class, 'aprobarEvaluacion'])->name('aprobarEvaluacion');

    Route::get('/editar/{consecutivo}', [EvaluacionController::class, 'editarEvaluacion'])->name('editarEvaluacion');
    Route::get('/detalle/{consecutivo}', [EvaluacionController::class, 'detalleEvaluacion'])->name('detalleEvaluacion');
    
    Route::post('/guardar', [EvaluacionController::class, 'guardarEvaluacion'])->name('guardarEvaluacion');
    Route::get('/eliminar/{id}', [EvaluacionController::class, 'eliminarEvaluacion'])->name('eliminarEvaluacion');

    Route::get('/adjuntos/{adjunto}/download', [EvaluacionController::class, 'downloadAdjunto'])->name('downloadAdjunto');
    Route::get('/exportar-reporte-csv', [EvaluacionController::class, 'exportarReporteCsv'])->name('exportarReporteCsv');


});