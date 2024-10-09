<?php

use Illuminate\Support\Facades\Route;

//ruta tipo get
/* Route::get('/', function () {
    return view('welcome');
}); */

//ruta tipo view
Route::view('/', 'inicio') -> name ('rutainicio');
Route::view('/form', 'formulario') -> name ('rutaform');
Route::view('/clientes', 'clientes') -> name ('rutaclientes');
Route::view('/component', 'componentes') -> name ('rutacomponentes');
