<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Listando os Usuários</h1>
            @foreach($users as $user)
                <div class="card card-default">
                    <div class="card-body">
                        <a href="/users/{{$user->id}}">
                            Nome: {{ $user->firstName }}<br>
                            Sobrenome: {{ $user->lastName }}<br>
                            Documento: {{ $user->userDocument }}<br>
                            Data de Nascimento: {{ $user->userBornDate }}<br>
                            E-mail: {{ $user->userEmail }}<br>
                            Função: {{ $user->userFunction }}<br>
                        </a>
                    </div>
                </div>
            @endforeach
    </div>
</body>
</html>