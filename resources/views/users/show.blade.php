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
        <div class="card card-default">
            {{-- <div class="card-heading">
                <h4>
                    {{$user->userUniversityId}}
                </h4>--}}
            </div> 
            <div class="card-body">
             {{$user->firstName}}
            </div>
        </div>
    </div>
</body>
</html>