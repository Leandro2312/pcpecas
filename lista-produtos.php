<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem dos produtos</title>
</head>
<body>
    <h1>Listagem de todos os produtos</h1>
    <?php
    $conexao = mysqli_connect("localhost", "root","","pcpecas");
    $sql_pesquisar = "select * from tabela_produto";
    $resultado = mysqli_query($conexao, $sql_pesquisar);
    while($linha = mysqli_fetch_assoc($resultado)){
        echo "<br>";
        echo "Nome do Produto: {$linha['produto']}";
        echo "<br>";
        echo "Marca do Produto: {$linha['marca']}";
        echo "<br>";
        echo "Modelo do Produto: {$linha['modelo']}";
        echo "<br>";
        echo "Preço: {$linha['preco']}";
        echo "<br>";
        echo "|============|";
    }
    mysqli_close($conexao);
    ?>

</body>
</html>