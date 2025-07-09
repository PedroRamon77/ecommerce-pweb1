<?php
session_start();
?>

<h2>Compra realizada com sucesso!</h2>

<p>Obrigado, <?php echo $_SESSION['usuario_nome'] ?? 'usuário'; ?>.</p>

<ul>
    <li><a href="listar_produtos.php">Voltar aos produtos</a></li>
    <li><a href="../logout.php">Sair</a></li>
</ul>
