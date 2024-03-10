<!-- @author: Alejandra Paz, Angel Rivera, Marc Sabina, Julia Prieto -->
<!-- 1. Dos imagenes: Suerte y Cofre. Redirigen a el siguiente apartado. -->
<x-layouts.app>

    <x-slot name="title">
        Cartas Especiales
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">CARTAS ESPECIALES</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                <div class="card">
                    <a href="{{ route('cofre') }}">
                        <img src="{{ asset('img/cartas_especiales/carta-cofre.png') }}" class="card-img-top"
                            alt="Carta Cofre">
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                <div class="card">
                    <a href="{{ route('suerte') }}">
                        <img src="{{ asset('img/cartas_especiales/carta-suerte.png') }}" class="card-img-top"
                            alt="Carta Suerte">
                    </a>
                </div>
            </div>
        </div>
    </div>

</x-layouts.app>
