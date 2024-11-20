@extends('layouts.plantilla1')

@section('titulo', 'Editar Cliente')

@section('contenido')
<div class="container mt-5 col-md-6">
    <h2>Editar Cliente</h2>
    <form action="{{ route('rutaActualizar', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="txtnombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="txtnombre" name="txtnombre" value="{{ $cliente->nombre }}" required>
        </div>

        <div class="mb-3">
            <label for="txtapellido" class="form-label">Apellido:</label>
            <input type="text" class="form-control" id="txtapellido" name="txtapellido" value="{{ $cliente->apellido }}" required>
        </div>

        <div class="mb-3">
            <label for="txtcorreo" class="form-label">Correo:</label>
            <input type="email" class="form-control" id="txtcorreo" name="txtcorreo" value="{{ $cliente->correo }}" required>
        </div>

        <div class="mb-3">
            <label for="txttelefono" class="form-label">Teléfono:</label>
            <input type="text" class="form-control" id="txttelefono" name="txttelefono" value="{{ $cliente->telefono }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
