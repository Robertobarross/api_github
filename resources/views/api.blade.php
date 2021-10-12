@extends('template'){{--Extenção do arquivo template--}}

@section('title', 'Dados do usuário'){{--Extenção do arquivo template--}}

@section('content'){{--Extenção do arquivo template--}}

<div id="dados-user">
    @foreach ($apiArray as $api)
    <h1>Consumindo Api GitHub</h1>

    <li active>Usuário: {{ $apiArray['name'] }}</li>

    <ul>
        <li active>Qualificações: {{ $apiArray['bio'] }}</li>
        <li active>Projetos: {{ $apiArray['public_repos'] }}</li>
        <li active>Seguidosres: {{ $apiArray['followers'] }}</li>
        <li active>Seguindo: {{ $apiArray['following'] }}</li>
    </ul>

    @endforeach
</div>

@endsection {{--Extenção do arquivo template--}}
