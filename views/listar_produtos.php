<?php
require_once("../config/conexao.php");

echo "<h2>Lista de Produtos</h2>";

$sql = "SELECT * FROM produtos";
$result = mysqli_query($conexao, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($produto = mysqli_fetch_assoc($result)) {
        echo "<div style='margin-bottom: 10px;'>";
        echo "<strong>{$produto['nome']}</strong><br>";
        echo "Preço: R$ " . number_format($produto['preco'], 2, ',', '.') . "<br>";
        echo "Estoque: {$produto['estoque']}<br>";
        echo "<a href='../controllers/adicionar_carrinho.php?id={$produto['id']}'>Adicionar ao carrinho</a>";
        echo "</div><hr>";
    }
} else {
    echo "<p>Nenhum produto cadastrado.</p>";
}

echo "<p><a href='carrinho.php'>Ver Carrinho</a></p>";
echo "<p><a href='cadastro_produto.php'>Cadastrar Produto</a></p>";
echo "<p><a href='../logout.php'>Sair</a></p>";

?>
