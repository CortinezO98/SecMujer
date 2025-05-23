<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::prefix('')->group(function () {
    Route::get('/', [HomeController::class, 'homeView'])->name('home');

    Route::get('/supervisor', [HomeController::class, 'viewSupervisor'])->name('viewSupervisor');
    Route::get('/agente', [HomeController::class, 'viewAgente'])->name('viewAgente');
});
