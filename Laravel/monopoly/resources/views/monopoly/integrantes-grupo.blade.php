<x-layouts.app>

    <!--
    @author: Alejandra Paz, Angel Rivera, Marc Sabina, Julia Prieto
    Integrantes del Grupo
    -->

    <!--Titulo -->
    <x-slot name="title">
       Integrantes Grupo
    </x-slot>

    <h1 class="form-center container mt-5">Integrantes UPC</h1>
    <div style="display: flex; flex-wrap: wrap; justify-content: center; align-items: center;">

        <!--Integrante 1-->
        <div style="margin: 10px; text-align: center;">
            <div class="card text-white bg-warning mb-3" style="max-width: 20rem;">
                <div class="card-header text-center">
                    <img src="{{ asset('img/programadores/clara.jpg') }}" alt="Clara" style="max-width: 100px; height: 90px;">
                </div>
                <div class="card-body">
                    <h4 class="card-title">Clara Ruiz</h4>
                    <p class="card-text">Estudiante de ingenieria informática en la UPC.</p>
                </div>
            </div>
        </div>

        <!------------------------------------------------------------------------------------------------------------------->
        <!--Integrante 2-->
        <div style="margin: 10px; text-align: center;">
            <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
                <div class="card-header text-center">
                    <img src="{{ asset('img/programadores/lluc.jpg') }}" alt="Lluc" style="max-width: 100px; height: 90px;">
                </div>
                <div class="card-body">
                    <h4 class="card-title">Joan Lluc Fernández</h4>
                    <p class="card-text">Estudiante de ingenieria informática en la UPC.</p>
                </div>
            </div>
        </div>

        <!------------------------------------------------------------------------------------------------------------------->
        <!--Integrante 3-->
        <div style="margin: 10px; text-align: center;">
            <div class="card text-white bg-success mb-3" style="max-width: 20rem;">
                <div class="card-header text-center">
                    <img src="{{ asset('img/programadores/marta.jpg') }}" alt="Marta" style="max-width: 100px; height: 90px;">
                </div>
                <div class="card-body">
                    <h4 class="card-title">Marta de Gea</h4>
                    <p class="card-text">Estudiante de ingenieria informática en la UPC.</p>
                </div>
            </div>
        </div>

        <!------------------------------------------------------------------------------------------------------------------->
        <!--Integrante 4-->
        <div style="margin: 10px; text-align: center;">
            <div class="card text-white bg-danger mb-3" style="max-width: 20rem;">
                <div class="card-header text-center">
                    <img src="{{ asset('img/programadores/marsi.jpg') }}" alt="Marcel" style="max-width: 100px; height: 90px;">
                </div>
                <div class="card-body">
                    <h4 class="card-title">Marcel Guim</h4>
                    <p class="card-text">Estudiante de ingenieria informática en la UPC.</p>
                </div>
            </div>
        </div>
    </div>

    <h1 class="form-center container mt-5">Integrantes Institut Provençana</h1>
    <div style="display: flex; flex-wrap: wrap; justify-content: center; align-items: center;">

        <!------------------------------------------------------------------------------------------------------------------->
        <!--Integrante 5-->
        <div style="margin: 10px; text-align: center;">
            <div class="card text-white bg-warning mb-3" style="max-width: 20rem;">
                <div class="card-header text-center">
                    <img src="{{ asset('img/programadores/julia.png') }}" alt="Julia" style="max-width: 100px; height: 90px;">
                </div>
                <div class="card-body">
                    <h4 class="card-title">Julia Prieto</h4>
                    <p class="card-text">Graduada en Lengua y Literatura española y estudiante de desarrollo de
                        aplicaciones
                        web
                    </p>
                </div>
            </div>
        </div>

        <!------------------------------------------------------------------------------------------------------------------->
        <!--Integrante 6-->
        <div style="margin: 10px; text-align: center;">
            <div class="card text-white bg-info mb-3" style="max-width: 20rem;">
                <div class="card-header text-center">
                    <img src="{{ asset('img/programadores/alejandra.png') }}" alt="Alejandra" style="max-width: 100px; height: 90px;">
                </div>
                <div class="card-body">
                    <h4 class="card-title">Alejandra Paz</h4>
                    <p class="card-text">Titulo Bachillerato Científico y estudiante de desarrollo de aplicaciones web.
                    </p>
                </div>
            </div>
        </div>

        <!------------------------------------------------------------------------------------------------------------------->
        <!--Integrante 7-->
        <div style="margin: 10px; text-align: center;">
            <div class="card bg-light mb-3" style="max-width: 20rem;">
                <div class="card-header text-center">
                    <img src="{{ asset('img/programadores/marc.png') }}" alt="Marc" style="max-width: 100px; height: 90px;">
                </div>
                <div class="card-body">
                    <h4 class="card-title">Marc Sabina</h4>
                    <p class="card-text">Estudiante de desarrollo de aplicaciones web.</p>
                </div>
            </div>
        </div>
        <!------------------------------------------------------------------------------------------------------------------->
        <!--Integrante 8-->
        <div style="margin: 10px; text-align: center;">
            <div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
                <div class="card-header text-center">
                    <img src="{{ asset('img/programadores/angel.png') }}" alt="Angel" style="max-width: 100px; height: 90px;">
                </div>
                <div style="margin: 10px; text-align: center;">
                    <div class="card-body">
                        <h4 class="card-title">Angel Rivera</h4>
                        <p class="card-text">Estudiante de desarrollo de aplicaciones web y tecnico en sistemas
                            microinformáticos y
                            redes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layouts.app>


