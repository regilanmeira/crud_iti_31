<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php
    $idlanche = $_GET["idlanche"];

    $sql = "SELECT * FROM lanche WHERE idLanche = '$idlanche'";

    include "conexao_bd.php";

    $resultado = retornarDados($sql);
    $linha = mysqli_fetch_assoc($resultado);

    ?>
   <form action="" method="post">
    <ul>
        
        <li><input value="<?php echo $linha["idLanche"] ?>" type="hidden" name="txtIdLanche"></li>
        <li><label>Descrição do lanche</label></li>
        <li><input value="<?php echo $linha["descricao"] ?>" type="text" name="txtDescricao"></li>
        <li><label>Preço  R$</label></li>
        <li><input value="<?php echo $linha["preco"]?>" type="text" name="txtPreco"></li>
        <li><button formaction="lanche_atualizar.php" type="submit">Atualizar</button></li>
        <li><button formaction="lanche_remover.php" type="submit">Remover</button></li>
    </ul>
   </form>
</body>
</html>