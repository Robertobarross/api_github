@extends('template'){{--Extenção do arquivo template--}}

@section('title', 'Repositórios/projetos'){{--Extenção do arquivo template--}}

@section('content'){{--Extenção do arquivo template--}}

<div id="dados-user">

    <h1 class="dados">Projetos GitHub</h1>

    @foreach ($reposArray as $repos)

    <ul>
        <li class="dados" active>Usuário/projeto: {{ $repos['full_name'] }}</li>
        <li class="dados" active>Acesso: {{ $repos['visibility'] }}</li>
        <li class="dados">forks: {{ $repos['forks'] }}</li>
        <li class="dados">default_branch: {{ $repos['default_branch'] }}</li>
        <li class="dados">Data da criação: {{ $repos['created_at'] }}</li>
        <br><a href="{{ $repos['html_url'] }}" class="links">Acessar repositório</a>
    </ul>
    
    <hr class="linha"></hr>

    @endforeach
</div>

@endsection {{--Extenção do arquivo template--}}


