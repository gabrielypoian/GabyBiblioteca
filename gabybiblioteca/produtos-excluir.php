<?php
echo $_GET['CODIGO'];
$id_excluir = $_GET['CODIGO'];
require_once 'classes\Produtos.php';
$produto = new Produtos();
$produto->excluir($id_excluir);

header('Location:produtos.php');
?>