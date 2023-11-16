<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanche - Inserir</title>
    <link rel="stylesheet" href="estilo.css" />
</head>
<body>
<?php
//1º USAR O ARQUIVO DE CONEXÃO
include "conexao_bd.php";

//2º CAPTURAR OS DADOS PARA INSERÇÃO
$descricao = $_POST["txtDescricao"];
$preco = $_POST["txtPreco"];

//3º MONTAR O COMANDO SQL
$sql = "INSERT INTO lanche(descricao,preco) VALUES ('$descricao','$preco')";

//4º EXECUTAR O COMANDO NO BANCO DE DADOS

if (executarComando($sql))
{
    echo "<h1>Lanche inserido</h1>";
}
else
{
    echo "<h1>Erro!</h1>";
}
?>

    
</body>
</html>