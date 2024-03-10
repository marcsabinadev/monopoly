<!-- @author: Alejandra Paz, Angel Rivera, Marc Sabina, Julia Prieto -->
<!-- 1. Tabla => Listamos casilla: color -->

<x-layouts.app>

    <x-slot name="title">
        Casillas
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">CASILLAS</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                <div class="card">
                    <a href="{{ route('casillaTotal', ['color' => 'marron']) }}">
                        <img src="{{ asset('img/casillas/marron/marron.jpg') }}" class="card-img-top"
                            alt="Casilla Marron">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                <div class="card">
                    <a href="{{ route('casillaTotal', ['color' => 'celeste']) }}">
                        <img src="{{ asset('img/casillas/celeste/celeste.jpg') }}" class="card-img-top img-fluid"
                            alt="Casilla Celeste">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                <div class="card">
                    <a href="{{ route('casillaTotal', ['color' => 'rosa']) }}">
                        <img src="{{ asset('img/casillas/rosa/rosa.jpg') }}" class="card-img-top" alt="Casilla Rosa">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                <div class="card">
                    <a href="{{ route('casillaTotal', ['color' => 'naranja']) }}">
                        <img src="{{ asset('img/casillas/naranja/naranja.jpg') }}" class="card-img-top"
                            alt="Casilla Naranja">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                <div class="card">
                    <a href="{{ route('casillaTotal', ['color' => 'rojo']) }}">
                        <img src="{{ asset('img/casillas/rojo/rojo.jpg') }}" class="card-img-top" alt="Casilla Roja">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                <div class="card">
                    <a href="{{ route('casillaTotal', ['color' => 'amarillo']) }}">
                        <img src="{{ asset('img/casillas/amarillo/amarillo.jpg') }}" class="card-img-top"
                            alt="Casilla Amarilla">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                <div class="card">
                    <a href="{{ route('casillaTotal', ['color' => 'verde']) }}">
                        <img src="{{ asset('img/casillas/verde/verde.jpg') }}" class="card-img-top"
                            alt="Casilla Verde">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                <div class="card">
                    <a href="{{ route('casillaTotal', ['color' => 'azul']) }}">
                        <img src="{{ asset('img/casillas/azul/azul.jpg') }}" class="card-img-top" alt="Casilla Azul">
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>

{{--

    <x-layouts.app>

    <x-slot name="title">
        Total Casillas
    </x-slot>

    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Casilla</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($casillasTotales as $casilla)
                    <tr class="{{ strtolower($casilla->color) }}">
                        <td><a href="{{ route('casillaDescripcion', $casilla->id) }}">{{ $casilla->nombre }}</a></td>
                        <td>
                            <img src="{{ asset('img/casillas/' . strtolower($color) . '/' . strtolower($color) . '_' . $loop->iteration . '.jpg') }}"
                                alt="{{ $casilla->nombre }}">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layouts.app>

    --}}
