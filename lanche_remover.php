<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="lanche_exibir.php" method="post">
    <?php
        $idLanche = $_POST["txtIdLanche"];
        
        $sql = "DELETE FROM lanche WHERE idLanche = " . $idLanche;

      
        include "conexao_bd.php";

        if (executarComando($sql) == true)
        {
            echo "<h1>Removido!</h1>";
        }
        else
        {
            echo "<h1>Erro!</h1>";
        }

    ?>
  <button type="submit">Voltar</button>
    </form>
</body>
</html>