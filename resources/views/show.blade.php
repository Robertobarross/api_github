@extends('template'){{--Extenção do arquivo template--}}

@section('title', 'Repositórios/projetos'){{--Extenção do arquivo template--}}

@section('content'){{--Extenção do arquivo template--}}


<div id="dados-user">
    @foreach ($reposArray as $repos)
    <h1>Projetos Api GitHub</h1>

    <li active>Usuário: {{ $repos['full_name'] }}</li>

    <ul>
    </ul>

    @endforeach
</div>

@endsection {{--Extenção do arquivo template--}}

