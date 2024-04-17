
<?php
    session_start();
    if($_SESSION["Login"]!="SIM"){
        header("Location: cadastro.html");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Usuarios</title>
</head>
<body>
    <?php
        $codigo = $_GET["codigo"];

        require "conexao.php";

        $sql = "SELECT * FROM `clientes` WHERE id = $codigo";

        $dados = mysqli_query($conexao, $sql);

        $membro = mysqli_fetch_array($dados);


        require "desconectar.php";
    ?>

<form id="formContato" method="post" action="atualizar_usuario.php"> 

   <p>ID: <input type = "text" name = "ID" value="<?php echo $membro["id"];?>"/></p>
   <p>Nome:<input type = "text" name = "nome" value="<?php echo $membro["nome"];?>"/></p>
   <p>Email:<input type = "text" name = "email" value="<?php echo $membro["email"];?>"/></p>
   <p>Senha:<input type ="password" name = "senha" value="<?php echo $membro["senha"];?>"/></p>
   <p><input type = "submit"  value = "Atualizar"/></p>
</form>
</body>
</html>