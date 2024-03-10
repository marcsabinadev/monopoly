<nav class="navbar navbar-expand-lg bg-danger" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">Monopoly</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
            aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('home') }}">Home
                    </a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a>
                        </li>
                    @endif
                @else
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            </li>
                        </ul>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                @endguest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('comoJugar') }}">¿Como jugar?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('integrantesGrupo') }}">Integrantes</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown">Cartas</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('cartaEspecial') }}">Cartas especiales</a></li>
                        <li><a class="dropdown-item" href="{{ route('añadirCarta') }}">Añadir cartas especiales</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('casilla') }}">Casillas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('clasificacion') }}">Clasificación</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown">Participantes</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('participante') }}">Participantes clasificación</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('añadirParticipante') }}">Añadir participantes</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
