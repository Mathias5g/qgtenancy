<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Styles-->
    <link rel="stylesheet" href="https://use.fontawesome.com/12422af1ba.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/global.css')}}">
    <link rel="stylesheet" href=@yield('csspersonalizado')>
    @yield('scriptpersonalizado')
    <title>@yield('titulo')</title>
</head>
<body>
<header>
    <nav class="navbar">
        <div>
            <ul class="menu-esquerda">
                <li><a href="{{route('home.home')}}"><img src="https://milsimbrasil.com/uploads/set_resources_19/9ec0040e8b1b93c105d065b85a6bd289_logofacebook.png" alt=""></a></li>
                <li><a href="{{route('home.home')}}">Home</a></li>
                <li><a href="{{route('missoes.missoes')}}">Missões</a></li>
                <li><a href="{{route('admin.admin')}}">Configurações</a></li>
            </ul>
        </div>
        <div class="menu-direita">
            <input type="text" placeholder="&#xf002; Pesquisar">
            <a href="{{route('qg.login.sair')}}"><button class="btn-red">Sair</button></a>
        </div>
    </nav>
</header>
<div class="main-content">
    @yield('content')
</div>
</body>
</html>
