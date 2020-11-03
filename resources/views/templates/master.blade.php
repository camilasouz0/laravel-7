<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="UTF-8">
        <title>Investindo</title>
        @yield('css-view')
        <link rel="stylesheet" href="{{asset('css/stylesheet.css')}}">
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
        {{-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/5.14.0/css/bootstrap-combined.no-icons.min.css" rel="stylesheet"> --}}
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>        
        @yield('css-view')

    </head>
    <body>
        @include('templates.menu-lateral')
        

        <section id="view-conteudo">
            @yield('conteudo-view')    
        </section>
        
        @yield('js-view')
        
    
</html>