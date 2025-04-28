<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

require __DIR__ . '/homeRoutes.php';

Route::get('/registro', [LoginController::class, 'ViewRegister'])->name('ViewRegister');
Route::post('/register', [LoginController::class, 'Register'])->name('Register');

Route::view('/login', 'user.login')->name('login');
Route::post('/post-login', [LoginController::class, 'Login'])->name('post-login');

Route::get('/logout', [LoginController::class, 'Logout'])->name('logout');

Route::get('/run-adjuntos-borrar', function () {
    \Illuminate\Support\Facades\Artisan::call('adjuntos:borrar');
    return 'Se ejecuto la tarea de borrado.';
});

Route::middleware(['auth'])->group(function () {
    require __DIR__ . '/monitoreoRoutes.php';
    require __DIR__ . '/evaluacionRoutes.php';
    require __DIR__ . '/userRoutes.php';

});
