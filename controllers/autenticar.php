<?php
session_start();
require_once("../config/conexao.php");

if (!isset($_POST['email'], $_POST['senha'])) {
    die("Campos não enviados corretamente.");
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = trim($_POST['senha']);

$sql = "SELECT * FROM usuarios WHERE email = '$email'";
$result = mysqli_query($conexao, $sql);

if (!$result) {
    die("Erro na consulta: " . mysqli_error($conexao));
}

$usuario = mysqli_fetch_assoc($result);

if ($usuario && password_verify($senha, $usuario['senha'])) {
    $_SESSION['usuario_id'] = $usuario['id'];
    $_SESSION['usuario_nome'] = $usuario['nome'];
    header("Location: ../views/listar_produtos.php");
    exit;
}
