<!-- @author: Alejandra Paz, Angel Rivera, Marc Sabina, Julia Prieto -->
<!-- Formulario modificar carta especial -->

<x-layouts.app>

    <!--Titulo -->
    <x-slot name="title">
        Modificar carta
    </x-slot>

    <div class="form-center container mt-5">
        <form action="{{ route('updateCarta', $carta->id) }}" method="POST">
            @csrf
            @method('PUT')
            <fieldset>
                <legend>Formulario modificar carta</legend>

                <div class="form-group">
                    <label for="tipoCarta">Tipo de carta</label>
                    <select class="form-control" id="tipoCarta" name="tipoCarta">
                        <option value="Suerte" {{ $carta->tipoCarta === 'Suerte' ? 'selected' : '' }}>Suerte</option>
                        <option value="Caja de Comunidad"
                            {{ $carta->tipoCarta === 'Caja de Comunidad' ? 'selected' : '' }}>Caja de Comunidad</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="definicion">Definición</label>
                    <textarea class="form-control" id="definicion" name="definicion" rows="3">{{ old('definicion', $carta->definicion) }}</textarea>
                </div>

                <button type="submit" class="btn btn-success">Guardar cambios</button>
                <a href="{{ route('cartaEspecial') }}" class="btn btn-danger">Cancelar</a>

            </fieldset>
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

    {{-- <div class="form-center container mt-5">
        <form>
            <fieldset>
                <legend>Formulario modificar</legend>
                <form action="{{ route('updateCarta', $carta->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="definicion">Definición</label>
                        <textarea class="form-control" id="definicion" name="definicion" rows="3">{{ old('definicion', $carta->definicion) }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-success">Guardar cambios</button>
                    <a href="{{ route('cartaEspecial') }}" class="btn btn-danger">Cancelar</a>
            </fieldset>
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
    </div> --}}

</x-layouts.app>
