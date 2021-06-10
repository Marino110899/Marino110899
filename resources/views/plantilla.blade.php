<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Elecciones</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/elecciones.css') }}" rel="stylesheet" type="text/css" />
        <script src="{{ asset('js/app.js') }}" type="text/js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        
    </head>
    <body>
        <header>
            <div class="row">
                <div class="col-md-2">
                    <img src="{{ asset('img/logo.png') }}" alt="logo"  width="60" height="60">
                </div>
                <div class="col-md-8">
                    <h1>Sistema para la elección del rector </h1>
                </div>
                <div class="col-md-2">

                </div>
            </div>
        </header>
        <div class="container">
            @yield('content')
            <script type="text/javascript" src="{{ asset('js/genericas.js') }}"> </script>
            @yield('scripts')
        </div>
        
    </body>
</html>