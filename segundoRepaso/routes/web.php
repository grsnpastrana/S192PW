<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\vistasController;

Route::view('/', 'inicio') -> name ('rutainicio');
Route::view('/form', 'formulario') -> name ('rutaformulario');
Route::post('/enviarLibro',[vistasController::class, 'mandarLibro'])->name('rutaEnviar');

