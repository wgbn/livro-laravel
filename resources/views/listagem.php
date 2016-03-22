<html>
<head>
    <title>Olá Laravel</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="container">
        <h1>Listagem de Produtos</h1>
        <table class="table table-striped table-bordered table-hover">
            <?php foreach ($produtos as $p): ?>
                <tr>
                    <td><?= $p->nome ?></td>
                    <td><?= $p->valor ?></td>
                    <td><?= $p->descricao ?></td>
                    <td><?= $p->quantidade ?></td>
                    <td><a href="/produtos/mostra?id=<?= $p->id; ?>">ver</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>