<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Livro Laravel</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/custom.css">
    <script src="https://code.jquery.com/jquery-1.12.2.min.js" integrity="sha256-lZFHibXzMHo3GGeehn1hudTAP3Sc0uKXBXAzHX1sjtk=" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/produtos">
                        Estoque Laravel
                    </a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                    <li><a href="/entrar">Entrar</a></li>
                    @else
                        <li><a href="/logout">Sair</a></li>
                    @endif
                    <li><a href="/produtos">Listagem</a></li>
                    <li><a href="/produtos/novo">Novo</a></li>
                </ul>
            </div>
        </nav>

        @yield('conteudo')

        <footer class="footer">
            <p>© Livro de Laravel da Casa do Código.</p>
        </footer>
    </div>
</body>
</html>