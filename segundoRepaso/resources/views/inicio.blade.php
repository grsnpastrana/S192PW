@extends('layouts.plantilla1')
@section('titulo','Pagina inicio')


@section('contenido')


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagen y Texto Centrados</title>
    <style>
      /*   body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        } */
        .container {
            text-align: center;
        }
        img {
            width: 20%;
            height: auto;
        }
        .text {
            margin-top: 10px;
            font-size: 18px;
            color: #333;
        }
    </style>
</head> 
<body>

    <div class="container">
        <img src="ministerio.png" alt=>
        <div class="text">El Ministerio de las Culturas, las Artes y el Patrimonio anunció hoy a las y los ganadores de la trigésima segunda convocatoria de los Premios Literarios, galardones que reúnen ocho distinciones entre ellas: Mejores Obras Literarias, Escrituras de la Memoria, Roberto Bolaño, Amster-Coré, Marta Brunet, Narrativa Gráfica, Publicaciones Digitales y desde este año Investigación y Humanidades.

En sus distintas categorías y géneros los premios 2024 reconocen 25 ganadores y 22 menciones, entregando más de 180 millones de pesos a autoras y autores, destacando además un segundo lugar que se entregan en los cinco géneros del premio Mejores Obras Literarias.</div>
    </div>
    @if(session('exito'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'Todo correcto',
                text: "{{ session('exito') }}",
                confirmButtonText: 'OK'
            });
        });
    </script>
@endif

</body>




@endsection  