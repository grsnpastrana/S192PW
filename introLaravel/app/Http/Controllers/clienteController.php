<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\carbon;
use App\Http\Requests\validadorClientes;

class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultaClientes = DB::table('clientes')->get();
        return view('clientes',compact('consultaClientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorClientes $request)
    {
        DB::table('clientes')->insert([
            "nombre"=>$request->input('txtnombre'),
            "apellido"=>$request->input('txtapellido'),
            "correo"=>$request->input('txtcorreo'),
            "telefono"=>$request->input('txttelefono'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);
        $ususario= $request->input('txtnombre');
        session()->flash('exito','se guardó el usuario '. $ususario);
        return to_route('rutaform');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = DB::table('clientes')->where('id', $id)->first();
        return view('formularioEditar', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'txtnombre' => 'required|string|max:255',
            'txtapellido' => 'required|string|max:255',
            'txtcorreo' => 'required|email|max:255',
            'txttelefono' => 'required|string|max:15',
        ]);
    
        DB::table('clientes')->where('id', $id)->update([
            'nombre' => $request->input('txtnombre'),
            'apellido' => $request->input('txtapellido'),
            'correo' => $request->input('txtcorreo'),
            'telefono' => $request->input('txttelefono'),
            'updated_at' => now(),
        ]);
    
        session()->flash('exito', 'Cliente actualizado correctamente.');
        return redirect()->route('rutaclientes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
