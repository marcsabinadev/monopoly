<!-- @author: Alejandra Paz, Angel Rivera, Marc Sabina, Julia Prieto -->
<!-- Formulario añador participante -->

<x-layouts.app>
    <x-slot name="title">
        Añadir Participante
    </x-slot>

    <div class="container mt-5">
        <h2>Añadir Participante</h2>
        <form action="{{ route('storeParticipante') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomUsuario">Nombre del participante:</label>
                <input type="text" class="form-control" id="nomUsuario" name="nomUsuario" required>
            </div>
            <button type="submit" class="btn btn-primary">Añadir Participante</button>
            <a href="{{ route('participante') }}" class="btn btn-danger">Cancelar</a>

        </form>
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
