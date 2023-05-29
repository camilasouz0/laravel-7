<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/stylesheet.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
    <body >
        <div class="backg">

        </div>
        <section id="conteudo-view" class="login">
            <h1>Sistema de Gestão Financeira</h1>
            <h3>Dados seguros</h3>
            {!! Form::open(['route' => 'user.login', 'method' => 'post']) !!}
            @csrf
            <p>Acesse o sistema</p>

            <label>
                {!! Form::email("username", null, ['class' => 'input', 'placeholder' => 'E-mail'])!!}
            </label>
            <label>
                {!! Form::password("password", ['placeholder' => 'Senha'])!!}
            </label>

            {!! Form::submit("Entrar") !!}

            {!! Form::close() !!}

            {{--  <form class="" action="index.html" method="post">
            </form>  --}}
        </section>

    </body>
</html>
