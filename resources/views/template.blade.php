<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

    <div id="barra-lateral">
        <a href="/show">show</a>
    </div>

    @yield('content'){{--Aqui é onde vai aparecer o conteúdo--}}

</body>
</html>
