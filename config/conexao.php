<?php
$host = "localhost";
$root = "root";
$pass = "pedroramon";
$bd = "ecommerce";

$conexao = mysqli_connect($host, $root, $pass, $bd);

if (!$conexao) {
    die("Erro na conexão: " . mysqli_connect_error());
}
?>
