<?php

require_once 'classes/Categoria.php';
$id = $_POST['id'];
$nome_categoria = $_POST['nome_categoria'];
$categoria = new Categoria();
$categoria->alterar($id, $nome_categoria);

echo $id . " - " . $nome_categoria;

header('Location:categorias.php');

?>