<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Super Gestão - @yield('titulo')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('assets/css/estilo.css') }}">
    </head>
    <body>
        @include('site.layouts.menu-basico')
        @yield('conteudo')
        @include('site.layouts.rodape')
    </body>
</html>