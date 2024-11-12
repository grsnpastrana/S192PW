<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de Usuarios</title>
    @vite(['resources/js/app.js']) 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

    <h1 class="text-center text-primary mt-5 mb-4">Registro de usuarios</h1>

    <div class="container col-md-4">
      
        <form method="POST" action="{{ route('registrar.usuario') }}">
            @csrf 

            <div class="mb-3">
                <label class="form-label">Correo:</label>
                <input type="email" name="email" class="form-control" >
            </div>

            <div class="mb-3">
                <label class="form-label">Contraseña:</label>
                <input type="password" name="password" class="form-control" >
            </div>                

            <div class="mb-3">
                <label class="form-label">Edad:</label>
                <input type="number" name="age" class="form-control" min="1" >
            </div>

            <button type="submit" class="btn btn-danger">Guardar Usuario</button>
        </form>
    </div>

    
    @if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: '¡Éxito!',
            text: '{{ session("success") }}',
            confirmButtonText: 'Aceptar'
        });
    </script>
    @endif
    @if($errors->any())
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Error en el registro',
            html: `
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            `,
            confirmButtonText: 'Reintentar'
        });
    </script>
    @endif

</body>
</html>
