@extends('layouts.plantilla1')
@section('titulo','Registro de libro')

@section('contenido')


<form action="/enviarLibro" method="POST">
    
@if(session('exito'))
            <x-Alert tipo="success"> {{session('exito')}} </x-Alert>
            @endif

            @session('exito')
              <script>
              Swal.fire({
                title: "Good job!",
                text: '{{$value}}',
                icon: "success"
              });

            </script>
            @endsession 
    


@csrf


<div class="container mt-5 col-md-6">
    

 

<div class="mb-3">
    <label for="isbn" class="form-label">{{__('ISBN')}}</label>
    <input type="text" class="form-control" name="txtisbn">
    <small class='fst-italic text-danger'>{{$errors->first('txtisbn')}}</small>
</div>

<div class="mb-3">
    <label for="titulo" class="form-label">{{__('Titulo')}}</label>
    <input type="text" class="form-control" name="txttitulo">
    <small class='fst-italic text-danger'>{{$errors->first('txttitulo')}}</small>
</div>

<div class="mb-3">
    <label for="pagina" class="form-label">{{__('Paginas')}}</label>
    <input type="text" class="form-control" name="txtpaginas">
    <small class='fst-italic text-danger'>{{$errors->first('txtpaginas')}}</small>
</div>

<div class="mb-3">
    <label for="año" class="form-label">{{__('Año')}}</label>
    <input type="text" class="form-control" name="txtaño">
    <small class='fst-italic text-danger'>{{$errors->first('txtaño')}}</small>
</div>

<div class="mb-3">
    <label for="email" class="form-label">{{__('Email editorial')}}</label>
    <input type="text" class="form-control" name="txtemail">
    <small class='fst-italic text-danger'>{{$errors->first('txttemail')}}</small>
</div>

<div class="card-footer text-muted">
    <div class="d-grid gap-2 mt-2 mb-1">
        <button type="submit" class="btn btn-success btn-sm">{{__('Registrar libro')}}</button>
    </div>
</div>


@endsection  