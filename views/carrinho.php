<?php
session_start();
require_once("../config/conexao.php");

echo "<h2>Seu Carrinho</h2>";

$carrinho = $_SESSION['carrinho'] ?? [];

$total = 0;

if (count($carrinho) == 0) {
    echo "<p>Carrinho vazio</p>";
} else {
    foreach ($carrinho as $id) {
        $sql = "SELECT * FROM produtos WHERE id = $id";
        $res = mysqli_query($conexao, $sql);
        $prod = mysqli_fetch_assoc($res);
        echo "<p>{$prod['nome']} - R$ {$prod['preco']}</p>";
        $total += $prod['preco'];
    }

    echo "<h3>Total: R$ " . number_format($total, 2, ',', '.') . "</h3>";
    echo "<a href='../controllers/finalizar_pedido.php'>Finalizar Pedido</a>";
}

echo "<br><a href='listar_produtos.php'>Voltar</a>";
?>
