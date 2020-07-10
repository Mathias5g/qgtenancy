<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Styles-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/global.css')}}">
    <link rel="stylesheet" href=@yield('csspersonalizado')>
    <title>@yield('titulo')</title>
</head>
<body>
<header>
    <nav>
        <div>
            <ul>
                <li>Home</li>
                <li>Missões</li>
                <li>Configurações</li>
            </ul>
        </div>
        <div>
            <input type="text" placeholder="Pesquisar">
            <a href="{{route('qg.login.sair')}}"><button>Sair</button></a>
        </div>
    </nav>
</header>
@yield('content')
</body>
</html>
