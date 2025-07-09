<?php
require_once("../config/conexao.php");

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$estoque = $_POST['estoque'];

$sql = "INSERT INTO produtos (nome, preco, estoque) VALUES ('$nome', $preco, $estoque)";

if (mysqli_query($conexao, $sql)) {
    echo "Produto cadastrado com sucesso! <a href='../views/listar_produtos.php'>Ver produtos</a>";
} else {
    echo "Erro: " . mysqli_error($conexao);
}
?>
