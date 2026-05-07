<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Programaciones Didácticas</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

        <style>
            svg {
                width: 20px;
            }
        </style>

    </head>
    <body>

        <nav class="navbar navbar-dark bg-dark px-3">
            <a class="navbar-brand" href="{{ url('/ciclos')}}">Programaciones Didácticas</a>

        </nav>

        <div class="container mt-4">
            @yield('content')
            <!-- mostrar mensaje -->
            @if (session('success'))
                <div class="alert alert-success">{{session('success')}}</div> <!-- session('succes')  para mostrar una vez -->

            @endif
            <!-- alerta de error -->
            @if (session('error'))
                <div class="alert alert-danger">
                    {{session('error')}}
                </div>
            @endif

        </div>
    </body>

</html>
