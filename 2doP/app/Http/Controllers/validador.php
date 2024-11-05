<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Validador extends Controller
{
    public function procesar(Request $request)
    {
        
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
            'age' => 'required|integer|min:1',
        ]);

      
        return redirect()->back()->with('success', 'Usuario registrado exitosamente');
    }
}
