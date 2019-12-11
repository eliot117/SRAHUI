<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sistema de Riego Automatizado</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="css/font.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/mystyle.css" rel="stylesheet">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a class="style" href="{{ url('/home') }}">Dashboard</a>
                    @else
                        <a class="style" href="{{ route('login') }}">Iniciar Sesión</a>

                        @if (Route::has('register'))
                            <a class="style" href="{{ route('register') }}">Registrarte</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="content">
                <div class="title m-b-md">
                    Sistema de Riego Automatizado
                </div>
                <h1> Instituto Tecnológico de Huimanguillo</h1>
            </div>
        </div>
        <footer>
            Derechos Reservados ITVH 2019
        </footer>
    </body>
</html>
