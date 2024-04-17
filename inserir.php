<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require "conexao.php";

        $strSQL = "INSERT INTO clientes(";
        $strSQL = $strSQL . "nome,";
        $strSQL = $strSQL . "email,";
        $strSQL = $strSQL . "senha,";
        $strSQL = $strSQL . "mensagem) ";

        $strSQL = $strSQL . "VALUES(";
        $strSQL = $strSQL . "'Felipe',";
        $strSQL = $strSQL . "'felipe@felipe.com',";
        $strSQL = $strSQL . "'123456',";
        $strSQL = $strSQL . "'Top d+ o site');";

        mysqli_query($conexao, $strSQL) or die (mysqli_error());

        require "desconectar.php";

    ?>

    <h1>Atualizado </h1>
</body>
</html>