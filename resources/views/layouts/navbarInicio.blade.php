<div id="app">
    <!--<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">-->
    <nav class="navbar navbar-expand-md navbar-light" style="background-color: #4285F4; shadow-sm">
        <a class="navbar-brand" href="{{ url('/') }}">Sistema de Riego Automatizado</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
                <li class="nav-item">
                     <a class="btn btn-success" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="btn btn-success" href="{{ route('register') }}">{{ __('Registrarme') }}</a>
                    </li>
                @endif
            </ul>
        </div>
    </nav>

        @yield('content')
    
</div>