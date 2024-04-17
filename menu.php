<?php
session_start(); 

if (isset($_SESSION["Login"]) && $_SESSION["Login"] === "SIM") {
    echo '<span>Bem-vindo, ' . $_SESSION["Usuario"] . '!</span>';
    echo '<a class = "links" href="logoff.php">Logout</a>';
} else {
    echo '<a class = "links" href="login.html">Login</a>';
}
?>
