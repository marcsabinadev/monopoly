<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'daw2' }}</title>
</head>

<body>
    @include('partials.navigate')
    {{-- se tiene que poner el nombre del archivo en la etiqueta --}}
    <x-navigate />
    {{-- content --}}
    @yield('content')
    {{ $slot }}
</body>

</html>
