<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $idLanche = $_POST["txtIdLanche"];
        $descricao = $_POST["txtDescricao"];
        $preco = $_POST["txtPreco"];

        $sql = "UPDATE lanche SET descricao = '$descricao', preco = '$preco' WHERE idLanche = '$idLanche'";

      
        include "conexao_bd.php";

        if (executarComando($sql) == true)
        {
            echo "<h1>Atualizado!</h1>";
        }
        else
        {
            echo "<h1>Erro!</h1>";
        }

    ?>
    
</body>
</html>