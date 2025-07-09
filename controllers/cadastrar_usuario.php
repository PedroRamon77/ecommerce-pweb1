<?php
require_once("../config/conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

if (mysqli_query($conexao, $sql)) {
    echo "Usuário cadastrado com sucesso! <a href='../views/login.php'>Fazer login</a>";
} else {
    echo "Erro: " . mysqli_error($conexao);
}
?>
