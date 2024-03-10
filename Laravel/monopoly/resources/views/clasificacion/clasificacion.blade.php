<!-- @author: Alejandra Paz, Angel Rivera, Marc Sabina, Julia Prieto
3. Tabla => Listar clasificación (numPosicion, nomUsuario y fecha) -->

<x-layouts.app>
    <x-slot name="title">
        Añadir Cartas
    </x-slot>
    <div class="container mt-5">
        <h1>Tabla de Clasificación</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Posición</th>
                    <th>Nombre de Usuario</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($participantesOrdenados as $participante)
                    <tr>
                        <td>{{ $participante->clasificacion->numPosicion }}</td>
                        <td>{{ $participante->nomUsuario }}</td>
                        <td>{{ $participante->clasificacion->fecha }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layouts.app>
