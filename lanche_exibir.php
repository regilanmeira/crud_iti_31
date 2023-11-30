<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir lanche</title>
    <link href="estilo.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/aa1f2d8e44.js" crossorigin="anonymous"></script>
</head>
<body>
<h1>Lanches disponíveis</h1>
<table>
    <tr>
        <th>Descrição</th>
        <th>Preço R$ </th>
        <th>Ações</th>

    </tr>


    <?php 
        include "conexao_bd.php";

        $sql = "SELECT * FROM lanche ORDER BY descricao";

        $resultado = retornarDados($sql);

        while ($linha = mysqli_fetch_assoc($resultado))
        {
   
           
    ?>

    <tr>
            <td><?php echo $linha["descricao"] ?></td>
            <td><?php echo $linha["preco"] ?></td>
            <td>
                <a href="lanche_ver.php?idlanche=<?php echo $linha["idLanche"]?>">
                    <i class="fa-solid fa-eye fa-beat" style="color: #30c549;"></i>
                </a>
            </td>
    </tr>

    <?php
        }
    ?>


</table>
    
</body>
</html>