<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\operaciones;

/* Route::view('/', 'inicio') -> name ('rutainicio');
Route::view('/', 'conversion') -> name ('rutaconversion');
 */

 Route::view('/', 'inicio') -> name ('rutainicio');
 Route::view('/con', 'conversion') -> name ('rutaconversion');
 Route::post('/calcular', [operaciones::class, 'calcular'])->name('mandarcalcular');
