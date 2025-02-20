<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvaluacionController;

Route::prefix('evaluacion')->group(function () {
    Route::Post('/crear', [EvaluacionController::class, 'crearEvaluacion'])->name('crearEvaluacion');
    Route::get('/editar/{consecutivo}', [EvaluacionController::class, 'editarEvaluacion'])->name('editarEvaluacion');
});