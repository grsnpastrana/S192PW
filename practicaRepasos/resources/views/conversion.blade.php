@extends('layouts.plantilla1')

@section('titulo','Calculadora')

@section('Calcular')


          {{-- inica tarjeta de formulario --}}
          <div class="container mt-5 col-md-6">
            <div class="card font-monospace">
              <div class="card-header fs-5 text-center text-primary">
                Calculadora 
              </div>
              <div class="card-body text-justify">
                
                <form action="/calcular" method="POST">

                @csrf
                <div class="mb-3">
                    <label for="mb_a_gb_1" class="form-label">Mb a Gb</label>
                    <input type="text" class="form-control" name="mb_a_gb_1">
                    <button type="submit" class="btn btn-success btn-sm">Calcular</button>
                </div>

                <div class="mb-3">
                    <label for="gb_a_mb_2" class="form-label">Gb a Mb</label>
                    <input type="text" class="form-control" name="gb_a_mb_2">
                    <button type="submit" class="btn btn-success btn-sm">Calcular</button>
                </div>

                <div class="mb-3">
                    <label for="gb_a_tb_1" class="form-label">Gb a Tb</label>
                    <input type="text" class="form-control" name="gb_a_tb_1">
                    <button type="submit" class="btn btn-success btn-sm">Calcular</button>
                </div>

                <div class="mb-3">
                    <label for="tb_a_gb_2" class="form-label">Tb a Gb</label>
                    <input type="text" class="form-control" name="tb_a_gb_2">
                    <button type="submit" class="btn btn-success btn-sm">Calcular</button>
                </div>
                  
                  </div>
                </form>
              </div>
            </div>
          </div>
          
@endsection           
      