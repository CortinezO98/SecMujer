<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::prefix('user')->group(function () {
    Route::get('/getUserWithRole/{role_id}', [UserController::class, 'getUserWithRole']);
});