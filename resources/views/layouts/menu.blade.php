<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="icon" href="./img/loja/logo_613x611_no_bg.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/reset.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/estilos-globais.css">

    <script src="./js/menu.js"></script>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo_menu_container">
                <a href="/" class="a_logo_menu">
                    <img src="./img/loja/logo-menu.png" class="logo_menu" width="200px" height="60px" alt="logo">
                </a>
            </div>
            


            <div class="ul-container">

                <ul class="ul-menu">
                    <li class="li-menu"><a href="/" class="a-menu menu-ativo">Início</a></li>
                    <li class="li-menu"><a href="/produtos" class="a-menu">Produtos</a></li>
                    <li class="li-menu"><a href="/contato" class="a-menu">Contato</a></li>
                </ul>

            </div>

        </nav>

        <hr class="linha_menu">

    </header>

    @yield('conteudo')

</body>
</html>