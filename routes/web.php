<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/registro', [LoginController::class, 'ViewRegister'])->name('ViewRegister');
Route::post('/register', [LoginController::class, 'Register'])->name('Register');

Route::view('/login', 'user.login')->name('login');
Route::post('/post-login', [LoginController::class, 'Login'])->name('post-login');

Route::get('/logout', [LoginController::class, 'Logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    
    Route::get('/roles/admin', function () {
        return view('roles.admin');
    })->name('roles.admin');

    Route::get('/roles/supervisor', function () {
        return view('roles.supervisor');
    })->name('roles.supervisor');

    Route::get('/roles/agente', function () {
        return view('roles.agente');
    })->name('roles.agente');

    Route::get('/roles/lider', function () {
        return view('roles.lider');
    })->name('roles.lider');

});

Route::view('/inicio', 'inicio')->name('inicio');

require __DIR__ . '/monitoreoRoutes.php';
require __DIR__ . '/evaluacionRoutes.php';
require __DIR__ . '/userRoutes.php';


