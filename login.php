<?php
    if($_POST ["email"] == null) {
        header("Location: login.html");

    }
    else{
        $UsuarioDigitado = $_POST["email"];
        $SenhaDigitada = $_POST["senha"];

        require "conexao.php";

        $strSQL = "SELECT email, senha FROM clientes WHERE email = '$UsuarioDigitado'";

        $consulta = mysqli_query($conexao, $strSQL);

        while($linha=mysqli_fetch_array($consulta)){
            $UsuarioBD = $linha['email'];
            $SenhaBD = $linha['senha'];
        }

        require "desconectar.php";

        if($UsuarioDigitado == $UsuarioBD && $SenhaDigitada == $SenhaBD){

            session_start();

            $_SESSION["Login"] = "SIM";
            $_SESSION["Usuario"] = $UsuarioBD;
            header("Location: index.php");

        } 
        else{
            session_start();
            $_SESSION ["Login"] = "NÃO";
            $msg_body = "<h1>Você não esta logado</h1>";    
            $msg_body =  $msg_body . 
            "<p><a href = 'login.html'>Login</p>";
        } 
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo $msg_body;
    ?>
</body>
</html>