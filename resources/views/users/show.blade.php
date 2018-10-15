@extends('layouts.app')
@section('page-header')
    <h1>
        Usuário
        <small>{{ $user->firstName }}</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('users.index') }}">Usuários</a></li>
        <li class="active">{{ $user->firstName }}</li>
    </ol>
@endsection
@section('content')
    <div class="">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="box box-default">
                    <div class="box-body with-border">
                        Nome: {{ $user->firstName }}<br>
                        Sobrenome: {{ $user->lastName }}<br>
                        Documento: {{ $user->userDocument }}<br>
                        Data de Nascimento: {{ $user->userBornDate }}<br>
                        E-mail: {{ $user->userEmail }}<br>
                        Função: {{ $user->userFunction }}<br>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
