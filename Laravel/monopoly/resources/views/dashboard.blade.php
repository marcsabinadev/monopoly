<x-layouts.app>
    <x-slot name="title">
        Bienvenido
    </x-slot>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Bienvenido
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        ¡Estás conectado!
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
