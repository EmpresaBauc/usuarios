<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Atualizar Usuário</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo asset('css/main.css')?>" type="text/css"> 
    </head>
    <body>
      <div class="position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Atualizar Usuário
                </div>
                <div class="links">
                    <a href="{{ url('/index') }}">Home</a>
                    <a href="{{ url('/cadastrar') }}">Cadastrar</a>
                </div>
                <br><br>
                <form method="GET" action="{{ url('/salvar') }}">
                    Nome
                    <br>
                    <input name="id" type="hidden" value=<?php echo '"'.$_GET['id'].'"'?>></input>
                    <input name="nome" type="text" value=<?php echo '"'.$_GET['name'].'"'?>></input>
                    <br>
                    <br>
                    Email
                    <br>
                    <input name="email" type="text" value=<?php echo '"'.$_GET['email'].'"'?>></input>
                    <br>
                    <br>
                    Senha
                    <br>
                    <input name="senha" type="password"></input>
                    <br>
                    <button type="submit">Enviar</button>
                </form>  
            </div>
        </div>
    </body>
</html>