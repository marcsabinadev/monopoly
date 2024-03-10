<!-- @author: Alejandra Paz, Angel Rivera, Marc Sabina, Julia Prieto -->
<!-- 2. Tabla: Listamos casilla: nombre e imagen asociada (id cartas propiedades) -->

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
