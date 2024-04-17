<?php
    session_start();

    if($_SESSION["Login"] != "SIM") {
        header("Location: index.html");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $msg_body = "<p align = 'center'> Login feito por " . $_SESSION["Usuario"] . "</p>";
        require "conexao.php";

        $strSQL = "SELECT id, nome, email, senha  FROM clientes ";

        $consulta = mysqli_query($conexao, $strSQL);

        echo $msg_body;

        echo "<table border = 1 align = 'center'><tr><td>ID</td><td>Nome</td><td>email</td><td>senha</td></tr>";

        while($linha = mysqli_fetch_array($consulta)) {
            echo "<tr>";
            echo "<td>" . $linha['id'] . "</td>";
            echo "<td>" . $linha['nome'] . "</td>";
            echo "<td>" . $linha['email'] . "</td>";
            echo "<td>" . $linha['senha'] . "</td>";
            echo "<td> 
            <a href = bd_form_ver_usuarios.php?codigo=" . $linha['id'] . ">
            <img src ='img/edita.jfif' width = '30px'> </a></td>";
            
            echo "<td><img src = 'img/excluir.png' width = '30px'></td>";

        }

        echo "</tr></table>";

        require "desconectar.php";

    ?>

    <p><a href='logoff.php'>Logoff</a></p>
</body>
</html>