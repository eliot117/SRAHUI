<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Sistema de Riego Automatizado ITHUI</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mystyle.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="css/fullpage.css">
	<link rel="stylesheet" href="css/home.css">
</head>
<body>

    @extends('layouts.navbarInicio')
    @section('content')
    <img src="img/cesped.png" class="img-fluid">
    
    <footer>
        Derechos Reservados ITVH 2019
    </footer>
    @endsection
    
    <script src="js/fullpage.js"></script>
    <script src="js/home.js"></script>
    <script src="js/video.js"></script>
</body>
</html>