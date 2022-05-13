<?php

$conexao = mysqli_connect("localhost", "root", "", "pcpecas");

$produto = $_POST ['produto'];
$marca = $_POST ['marca'];
$modelo = $_POST ['modelo'];
$preco = $_POST ['preco'];
echo "{$produto} - {$marca} - {$modelo} - {$preco}";

$sql_inserir = "insert into tabela_produto(produto,marca, modelo, preco) values ('{$produto}', '{$marca}','{$modelo}',{$preco})";

mysqli_query($conexao, $sql_inserir);


mysqli_close($conexao);
?>