<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Usuários</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo asset('css/main.css')?>" type="text/css"> 

    </head>
    <body>
         <div class="position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Gerenciamento de Usuários
                </div>

                <div class="links">
                    <a href="{{ url('/index') }}">Home</a>
                    <a href="{{ url('/cadastrar') }}">Cadastrar</a>
                </div>
                <br>
                <br>
                <table style="width:100%">
                  <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Data Cadastro</th>
                    <th>Data Atualização</th>
                    <th>
                    <th>
                  </tr>
                  
                <?php
                // Listando os usuários
                $users = \App\User::get();
                foreach ($users as $user) {
                    echo '<tr>';
                    echo "<th>{$user->name} </th>";
                    echo "<th>{$user->email} </th>";
                    echo "<th>{$user->created_at} </th>";
                    echo "<th>{$user->updated_at} </th>";
                    echo "<th><a href=\"./atualizar?id={$user->id}&name={$user->name}&email={$user->email}\"><button id=\"atualizar\">Editar</button></a></th>";
                    echo "<th><a href=\"./remover?id={$user->id}\"><button id=\"remover\">Excluir</button></a></th>";
                }
                ?>
                </table>
            </div>
        </div>
    </body>
</html>
