<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/registro', [LoginController::class, 'ViewRegister'])->name('ViewRegister');
Route::post('/register', [LoginController::class, 'Register'])->name('Register');

Route::view('/login', 'user.login')->name('login');
Route::post('/post-login', [LoginController::class, 'Login'])->name('post-login');

Route::get('/logout', [LoginController::class, 'Logout'])->name('logout');

Route::get('/', function () {
    return "Holiwi";// view('welcome');
});

Route::view('/inicio', 'inicio')->name('inicio');

