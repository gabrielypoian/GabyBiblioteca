<?php
require_once 'classes/Produtos.php';

$produto = new Produtos();

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];
$categoria_livro = $_POST['categoria_livro'];
$descricao = $_POST['descricao'];

$produto->inserir($nome, $preco, $quantidade, $categoria_livro, $descricao);

header('Location:produtos.php');

?>