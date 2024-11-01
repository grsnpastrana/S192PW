<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class vistasController extends Controller
{
    public function mandarLibro(Request $peticion) {


        $validate=$peticion->validate([ 
            'txtisbn'=>'required|numeric|digits:13',
            'txttitulo'=>'required|string|max:150',
            'txtpaginas'=>'required|integer|min:1',
            'txtaño'=>'required|integer|digits:4|min:1000|max:' . date('Y'),
            'txtemail'=>'required|email',
            
        ]);

        
        $ususario= $peticion->input('txtitulo');

        session()->flash('exito','se guardó el usuario '. $ususario);
        return to_route('rutainicio');

      
    }
}
