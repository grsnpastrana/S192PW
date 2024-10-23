<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function home() {
        return view('inicio');

    }

    public function formulario() {
        return view('formulario');

    }

    public function consultas() {
        return view('clientes');

    }

    public function procesarCliente(Request $peticion) {
        
        $ususario= $peticion->input('txtnombre');

        session()->flash('exito','se guardó el usuario '. $ususario);
        return to_route('rutaform');

      
    }
     // otra forma de redirigir es return redirect ()->route('rutaclientes')
        /* return 'La información del cliente llegó al controlador';*/     
       // return $peticion ->ip();

}
