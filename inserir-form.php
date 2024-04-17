<?php
require "conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$mensagem = $_POST['mensagem'];

try {
    $sql = mysqli_query($conexao, "INSERT INTO clientes VALUES ('', '$nome', '$email', '$senha', '$mensagem')");
    
    if ($sql) {
        $msg = "Você foi cadastrado";
    } else {
        $msg = "Deu um erro, tente novamente";
    }
} catch (mysqli_sql_exception $e) {
    if ($e->getCode() === 1062) {
        $msg = "Desculpe, este email já está em uso. Por favor, escolha outro.";
    } else {
        $msg = "Erro no banco de dados: " . $e->getMessage();
    }
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-form.css">
    <title>Document</title>
</head>
<body>
    <div class="conteudo"> 
        <div class="conteudo-princi">
            <h1><?php echo $msg; ?></h1>
            
            <?php
            if (isset($msg) && $msg === "Você foi cadastrado") {
                $sql = mysqli_query($conexao, "SELECT * FROM clientes ORDER BY id DESC limit 1");
                
                while ($usuario = mysqli_fetch_object($sql)) {
                    echo "<b>Nome:</b>" . $usuario->nome . "<br />";
                    echo "<b>Email:</b>" . $usuario->email . "<br />";
                    echo "<b>Senha:</b>" . $usuario->senha . "<br />";
                    echo "<b>Mensagem:</b>" . $usuario->mensagem . "<br />";
                }
            }
            
            require "desconectar.php";
            ?>
            <br>
            <a href="index.php">
                <button class="btn" type="submit" style="width: 200px;">Voltar</button>
            </a>
        </div>
    </div>
</body>
</html>
