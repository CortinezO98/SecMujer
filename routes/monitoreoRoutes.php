<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MonitoreoController;

Route::prefix('monitoreo')->group(function () {
    Route::get('/nuevo', [MonitoreoController::class, 'showNuevoMonitoreo'])->name('nuevoMonitoreo');
    Route::get('/no-tipificado', [MonitoreoController::class, 'MonitoreoNoTipificacion'])->name('MonitoreoNoTipificacion');

    Route::get('/canales', [MonitoreoController::class, 'getCanales']);
    Route::get('/matrices/{canal_id}', [MonitoreoController::class, 'getMatrices']);
    Route::get('/tiposMonitoreos', [MonitoreoController::class, 'getTiposMonitoreos']);
});