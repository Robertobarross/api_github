@extends('template'){{--Extenção do arquivo template--}}

@section('title', 'Dados do usuário'){{--Extenção do arquivo template--}}

@section('content'){{--Extenção do arquivo template--}}


<div id="dados-user">

    <h1 class="dados">Consumindo Api GitHub</h1>

    @foreach ($apiArray as $api)

    <ul>
        <li class="dados" active>Usuário: {{ $apiArray['name'] }}</li>
        <li class="dados" active>Qualificações: {{ $apiArray['bio'] }}</li>
        <li class="dados" active>Projetos: {{ $apiArray['public_repos'] }}</li>
        <li class="dados" active>Seguidosres: {{ $apiArray['followers'] }}</li>
        <li class="dados" active>Seguindo: {{ $apiArray['following'] }}</li>
    </ul>
    <hr class="linha"></hr>

    @endforeach
</div>

@endsection {{--Extenção do arquivo template--}}
