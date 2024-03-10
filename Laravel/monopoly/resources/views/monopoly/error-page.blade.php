<x-layouts.app>

    <!--
    @author: Alejandra Paz, Angel Rivera, Marc Sabina, Julia Prieto
    Vista del error 404
    -->

    <!--Titulo -->
    <x-slot name="title">
        Error-404
    </x-slot>

    <div class="card-header text-center">
        <img src="{{ asset('img/icon404.png') }}" alt="Error 404" style="max-width: 500px; height: 500px;">
    </div>
    <div class="alert alert-dismissible alert-warning">
        <h4 class="alert-heading">Error 404</h4>
        <p class="mb-0">¡Ups! Parece que has llegado a un lugar inexistente. <a href="/pagina_inicio" class="alert-link">Vuelve a la página principal</a>.</p>
    </div>

</x-layouts.app>

