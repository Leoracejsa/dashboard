@extends('layouts.app')
@section('page-header')
    <h1>
        Usuários
        <small>Todos os usuários</small>
    </h1>
    <ol class="breadcrumb">
        <li class="active">Usuários</li>
    </ol>

    <div class="clearfix"></div>

    <br>

    <a href="{{ route('users.create') }}" class="btn btn-primary">
        <span class="fa fa-plus"></span> Novo
    </a>
@endsection
@section('content')
<div class="">
    <div class="row">
        @foreach($users as $user)
            <div class="col-xs-12 col-sm-4">
                <div class="box box-default">
                    <div class="box-body with-border">
                        Nome: {{ $user->firstName }}<br>
                        Sobrenome: {{ $user->lastName }}<br>
                        Documento: {{ $user->userDocument }}<br>
                        Data de Nascimento: {{ $user->userBornDate }}<br>
                        E-mail: {{ $user->userEmail }}<br>
                        Função: {{ $user->userFunction }}<br>
                    </div>
                    <div class="box-footer">
                        <a href="{{ route('users.show', ['id' => $user->userUniversityId]) }}" class="btn btn-default">
                            <span class="fa fa-user"></span> Ver Mais
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
