<x-layouts.app>

    <!--
    @author: Alejandra Paz, Angel Rivera, Marc Sabina, Julia Prieto
    Como Jugar
    -->

    <!--Titulo -->
    <x-slot name="title">
        Como Jugar
    </x-slot>

    <div class="container mt-5">
        <div class="jumbotron">
            <h2 class="display-4">¿Como se juega?</h2>
            <p class="lead">
                El Monopoly, creado por los estudantes de la UPC, es un juego de ordenador de estrategia y
                negociación donde los jugadores compiten para acumular propiedades y riqueza.
            </p>
            <p>
                El juego se juega en un tablero que representa una ciudad dividida en propiedades, calles, estaciones de
                ferrocarril y servicios públicos.
            </p>
            <p>
                Cada jugador elige una ficha y recibe una cantidad de dinero inicial. Los jugadores lanzan los dados
                para
                moverse
                por el tablero, compran propiedades en las que aterrizan y cobran alquiler a otros jugadores que
                aterrizan
                en sus
                propiedades.
            </p>
            <p>El objetivo del juego es ser el último jugador con dinero y propiedades.</p>
            <p>
                El juego termina cuando queda solo un jugador en pie o cuando los demás jugadores se declaran en
                bancarrota.
            </p>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <img src="{{ asset('img/monopoly.jpg') }}" alt="Imagen tablero Monopoly" class="img-fluid square-image"
                    width="560" height="560">
            </div>
        </div>
    </div>
</x-layouts.app>
