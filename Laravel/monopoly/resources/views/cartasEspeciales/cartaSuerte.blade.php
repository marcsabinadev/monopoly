<!-- @author: Alejandra Paz, Angel Rivera, Marc Sabina, Julia Prieto -->
<!-- 2. Tabla Suerte: Listamos carta suerte (3 botones añadir carta, modificar descripción y borrar carta): -->

<x-layouts.app>

    <x-slot name="title">
        Listar cartas Suerte
    </x-slot>

    <div class="container mt-5">
        <a href="{{ route('añadirCarta') }}" type="submit" class="btn btn-success btn-sm">Añadir</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Tipo de carta</th>
                    <th>Definición</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cartas as $carta)
                    <tr>
                        <td>{{ $carta->tipoCarta }}</td>
                        <td>{{ $carta->definicion }}</td>
                        <td>
                            <a href="{{ route('modificarCarta', $carta->id) }}" class="btn btn-info btn-sm">Editar</a>
                            <form action="{{ route('deleteCarta', $carta->id) }}" method="post" class="d-inline">
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
