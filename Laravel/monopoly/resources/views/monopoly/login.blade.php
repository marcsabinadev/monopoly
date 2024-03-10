<x-layouts.app>

    <!--
    @author: Alejandra Paz, Angel Rivera, Marc Sabina, Julia Prieto
    Formulario de Login
    -->

    <!--Titulo -->
    <x-slot name="title">
       Login
    </x-slot>

    <div class="form-center container mt-4 border border-black rounded">
        <form>
            {{-- <fieldset method="POST" action="{{ route('login.custom') }}"> --}}
                <legend>Login</legend>
                <div class="form-group">
                    <label for="nombre" class="form-label mt-4">Usuario: </label>
                    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="nombre"
                        autocomplete="off">
                    @if ($errors->has('nombre'))
                        <span class="text-danger">{{ $errors->first('nombre') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="contrasenya" class="form-label mt-4">Contraseña: </label>
                    <input type="contrasenya" class="form-control" name="contrasenya" id="contrasenya"
                        placeholder="contrasenya" autocomplete="off">

                    @if ($errors->has('contrasenya'))
                        <span class="text-danger">{{ $errors->first('contrasenya') }}</span>
                    @endif

                </div>
                <br />
                <div style="text-align: center">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            {{-- </fieldset> --}}
        </form>
    </div>

</x-layouts.app>




