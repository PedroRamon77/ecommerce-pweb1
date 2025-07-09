<?php
require_once("config/conexao.php");

$nome = 'Admin';
$email = 'admin@email.com';
$senha_plain = '123456';

$senha_hash = password_hash($senha_plain, PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($stmt, "sss", $nome, $email, $senha_hash);

if (mysqli_stmt_execute($stmt)) {
    echo "Usuário criado com sucesso!";
} else {
    echo "Erro ao criar usuário: " . mysqli_error($conexao);
}

mysqli_stmt_close($stmt);
mysqli_close($conexao);
?>
