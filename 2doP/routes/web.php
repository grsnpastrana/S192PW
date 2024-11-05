
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\validador;


Route::get('/formUsuarios', function () {
    return view('formUsuarios');
});


Route::post('/registrar-usuario', [validador::class, 'procesar'])->name('registrar.usuario');


