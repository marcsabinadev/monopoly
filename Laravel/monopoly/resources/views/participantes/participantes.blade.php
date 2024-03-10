<!-- @author: Alejandra Paz, Angel Rivera, Marc Sabina, Julia Prieto-->
<!-- 1. Tabla => Listamos participantes (3 botones añadir participante, modificar nombre de usuario y borrar participante): -->

<x-layouts.app>
    <x-slot name="title">
        Participantes
    </x-slot>

    <div class="container mt-5">
        <a href="{{ route('añadirParticipante') }}" type="submit" class="btn btn-success btn-sm">Añadir Participante</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre participante</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($participantes as $participante)
                    <tr>
                        <td>{{ $participante->nomUsuario }}</td>
                        <td>
                            <a href="{{ route('modificarParticipante', $participante->id) }}"
                                class="btn btn-info btn-sm">Editar</a>
                            <form action="{{ route('deleteParticipante', $participante->id) }}" method="post"
                                class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layouts.app>
