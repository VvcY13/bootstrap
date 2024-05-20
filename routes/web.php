<?php

use App\Http\Controllers\dashboarController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registro', [registroController::class, 'show'])->name('registro');
Route::post('/registrarusuario', [registroController::class, 'registroUsuario'])->name('registrarusuario');
Route::post('/login', [loginController::class, 'login'])->name('login');
Route::get('/dashboard', [dashboarController::class, 'index'])->name('dashboard'); 
Route::post('/logout', [loginController::class, 'logout'])->name('logout');
