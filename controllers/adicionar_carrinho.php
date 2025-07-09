<?php
session_start();

$id = $_GET['id'];

if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

if (!in_array($id, $_SESSION['carrinho'])) {
    $_SESSION['carrinho'][] = $id;
}

header("Location: ../views/listar_produtos.php");
?>
