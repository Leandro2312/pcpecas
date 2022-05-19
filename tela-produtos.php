<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Peças</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1 id = "Titulo">Cadastro de Produtos</h1>
    <fieldset>
        <legend>Cadastro de Peças</legend>
    <form action="cadastro-produtos.php" method="post">
        Produto:
        <input name="produto" id = "produto">
        <br>
        Marca:
        <input name="marca" id = "marca">
        <br>
        Modelo:
        <input name="modelo" id = "modelo">
        <br>
        Preço:
        <input name="preco" id = "preco">
        <br>
        <button type="submit">Cadastrar</button>
</fieldset>
</body>
</html>