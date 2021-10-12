<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{--link do arquivo css--}}
    <link rel="stylesheet" href="style/style.css">
    {{--link do ícone da api--}}
    <link rel="shortcut icon" href="img/Github.png" type="imge/x-icon">
</head>
<body>

    {{--Criando barra laterl--}}
    <div id="barra-lateral">

        {{--Inserindo imagem logo GitHub--}}
        <img src="img/git-hub.png" class="img-git-hub" alt="Imagem logo GitHub">
        <h1 class="titulo-api">Consumindo Api do GitHub</h1>

        <form action="/show" method="GET">
            <input type="text" id="search" name="search" class="search" placeholder="Pesquisar projetos">
        </form>

        {{--Links de navegação--}}
        <p><a href="/" class="links">Inicio</a></p>
        <p><a href="/show" class="links">Projetos</a></p>
    </div>

    @yield('content'){{--Aqui é onde vai aparecer o conteúdo--}}

</body>
</html>
