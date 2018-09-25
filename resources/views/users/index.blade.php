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
        <h1>Usuários</h1>
            @foreach($users as $user)
                <div class="card card-default">
                    <div class="card-body">
                        <a href="/users/{{$user->id}}">
                            {{ $user->firstName }}
                            {{ $user->lastName }}
                            {{ $user->userDocument }}
                            {{ $user->userBornDate }}
                            {{ $user->userEmail }}
                            {{ $user->userFunction }}
                        </a>
                    </div>
                </div>
            @endforeach

    </div>
</body>
</html>