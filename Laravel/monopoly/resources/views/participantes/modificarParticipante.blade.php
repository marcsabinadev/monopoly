<!-- @author: Alejandra Paz, Angel Rivera, Marc Sabina, Julia Prieto -->
<!-- Formulario modificar participante (nomUsuario) -->

<x-layouts.app>
    <x-slot name="title">
        Modificar Participante
    </x-slot>

    <div class="container mt-5">
        <h2>Modificar Participante</h2>

        <form action="{{ route('updateParticipante', $participante->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nomUsuario">Nombre del participante:</label>
                <input type="text" class="form-control" id="nomUsuario" name="nomUsuario"
                    value="{{ $participante->nomUsuario }}" required>
            </div>
            <button type="submit" class="btn btn-success">Guardar Cambios</button>
            <a href="{{ route('participante') }}" class="btn btn-danger">Cancelar</a>
        </form>
        <!-- Posibles errores -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</x-layouts.app>
