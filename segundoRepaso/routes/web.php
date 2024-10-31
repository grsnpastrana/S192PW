<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'inicio') -> name ('rutainicio');
Route::view('/form', 'formulario') -> name ('rutaformulario');