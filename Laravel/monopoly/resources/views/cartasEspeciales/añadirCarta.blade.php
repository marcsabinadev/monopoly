<!-- @author: Alejandra Paz, Angel Rivera, Marc Sabina, Julia Prieto -->
<!-- Formulario añadir carta especial -->
<x-layouts.app>
    <x-slot name="title">
        Añadir Cartas
    </x-slot>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Añadir Carta Especial</div>

                    <div class="card-body">
                        <form action="{{ route('storeCarta') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="tipoCarta">Tipo de Carta</label>
                                <select name="tipoCarta" id="tipoCarta">
                                    <option value="Suerte">Suerte</option>
                                    <option value="Caja de Comunidad">Caja de comunidad</option>
                                </select>
                            </div>

                            <div>
                                <label for="casilla_id">Casillas</label>
                                <select name="casilla_id" id="casilla_id">
                                    @foreach ($casillas as $casilla)
                                        <option value="{{ $casilla->id }}">{{ $casilla->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="definicion">Definición</label>
                                <textarea class="form-control" id="definicion" name="definicion" rows="3"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Añadir Carta Especial</button>
                            <a href="{{ route('cartaEspecial') }}" class="btn btn-danger">Cancelar</a>

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
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
