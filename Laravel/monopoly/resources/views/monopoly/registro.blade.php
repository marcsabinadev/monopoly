<x-layouts.app>

    <!--
    @author: Alejandra Paz, Angel Rivera, Marc Sabina, Julia Prieto
    Formulario de registro
    -->

    <!--Titulo -->
    <x-slot name="title">
       Registro
    </x-slot>


    <div class="form-center container mt-5">
        <form>
            <fieldset>
                <legend>Registro</legend>
                <div class="form-group">
                    <label for="username" class="form-label mt-4">Usuario: </label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Username"
                        autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="email" class="form-label mt-4">Correo Electrónico: </label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más.</small><br>
                </div>
                <div class="form-group">
                    <label for="password" class="form-label mt-4">Contraseña: </label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password"
                        autocomplete="off">
                </div>

                <div class="form-group">
                    <label for="repeatPassword" class="form-label mt-4">Repetir Contraseña: </label>
                    <input type="password" name="passwordRepeat" class="form-control" id="repeatPassword"
                        placeholder="Repeat Password" autocomplete="off">
                </div>
                <br />
                <div style="text-align: center">
                    <button type="submit" class="btn btn-primary">Registro</button>
                </div>
            </fieldset>
        </form>
    </div>

</x-layouts.app>
