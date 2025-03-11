<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::prefix('user')->group(function () {
    Route::get('/obtenerAgentes/{matriz_id}', [UserController::class, 'obtenerAgentes']);
});