

@extends('layouts.plantilla1')

@section('titulo','Clientes Registrados')

@section('contenido')



      {{-- tarjetacliente --}}
      <div class="container mt-5 col-md-8">
      @if (session('exito'))
            <div class="alert alert-success">
            {{ session('exito') }}
            </div>
          @endif

      @session('exito')
            <script>
              Swal.fire({
                title: "Good job!",
                text: '{{ $value }}',
                icon: "success"
              });

            </script>
      @endsession

      @foreach ($consultaClientes as $cliente)
      
      
      <div class="card text-justify font-monospace">

        <div class="card-header fs-5 text-primary">
          {{$cliente->nombre}}
        </div>
        <div class="card-body">
          <h5 class="fw-bold">{{$cliente->correo}}</h5>
          <h5 class="fw-medium"> {{$cliente->telefono}}</h5>
          <p class="card-text fw-lighter"></p>

        </div>

        <div class="card-footer text-muted">
          
          <a href="{{ route('rutaEditar',$cliente->id) }}" class="btn btn-primary">Actualizar</a>
          <form action="{{ route('rutaEliminar', $cliente->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este cliente?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>

      </div>
      {{-- finaliza tarjetacliente --}}
      @endforeach
      </div>
    
  @endsection     