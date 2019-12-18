<?php

require_once 'classes/Produtos.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];
$categoria_livro = $_POST['categoria'];
$descricao = $_POST['descricao'];

$produtos = new Produtos();

$produtos->alterar($id, $nome, $preco, $quantidade, $categoria_livro, $descricao);

//echo $id . " - " . $nome . " - " . $preco;

header('Location:produtos.php');

?>