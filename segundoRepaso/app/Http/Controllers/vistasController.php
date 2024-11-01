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
            'txtaño'=>'required',
            'txtemail'=>'required',
            
        ]);

        
        $ususario= $peticion->input('txttitulo');

        session()->flash('exito','se guardó el libro '. $ususario);
        return to_route('rutainicio');

      
    }
}
