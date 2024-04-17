<?php
     session_start();
     if($_SESSION["Login"]!="SIM"){
         header("Location: cadastro.html");
     }

     require "conexao.php";

     ?>

     <?php

     $codigo = $_POST['ID'];
     $nome = $_POST['nome'];
     $email = $_POST["email"];
     $senha = $_POST["senha"];

     require "conexao.php";

     $sqlUP = "UPDATE clientes SET
     nome ='$nome', 
     email= '$email',
     senha= '$senha' WHERE id ='$codigo'";

     $UPdate = mysqli_query($conexao, $sqlUP);

     if ($UPdate) {
        $mensagem = "Informações atualizadas";
     }

     else{
        $mensagem = "Houve um erro";
     }

     require "desconectar.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content = "3; URL = 'pagina_restrita.php'"/>
    <title>Document</title>
</head>
<body>
    <?php
        echo $mensagem;
    ?>
</body>
</html>