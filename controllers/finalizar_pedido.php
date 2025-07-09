<?php
session_start();
$_SESSION['carrinho'] = [];
header("Location: ../views/sucesso.php");
exit;
