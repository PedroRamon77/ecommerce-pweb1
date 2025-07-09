<h2>Cadastro de Produto</h2>
<form method="POST" action="../controllers/cadastrar_produto.php">
    <label>Nome:</label><br>
    <input type="text" name="nome" required><br>
    <label>Preço:</label><br>
    <input type="number" step="0.01" name="preco" required><br>
    <label>Estoque:</label><br>
    <input type="number" name="estoque" required><br>
    <button type="submit">Cadastrar Produto</button>
</form>
