<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\clienteController;

Route::get('/', [controladorVistas::class, 'home'])->name('rutainicio');
Route::get('/form', [controladorVistas::class, 'formulario'])->name('rutaform'); 
Route::get('/clientes', [controladorVistas::class, 'consultas'])->name('rutaclientes');
Route::view('/component', [controladorVistas::class, 'componentes'])->name('rutacomponentes');
Route::post('/enviarCliente', [controladorVistas::class, 'procesarCliente'])->name('rutaEnviar');

//nueva ruta para el controlador 
route::get('/cliente/create',[clienteController::class, 'create'])->name('rutaform');

// ruta para el store 
Route::post('/cliente', [clienteController::class, 'store'])->name('enviaCliente');

//nueva ruta para clienteController para el index 
Route::get('/clientes', [clienteController::class, 'index'])->name('rutaclientes');









//ruta tipo get
/* Route::get('/', function () {
    return view('welcome');
}); */

//ruta tipo view
/* Route::view('/', 'inicio') -> name ('rutainicio');
Route::view('/form', 'formulario') -> name ('rutaform');
Route::view('/clientes', 'clientes') -> name ('rutaclientes');
Route::view('/component', 'componentes') -> name ('rutacomponentes');
 */