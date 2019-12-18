<?php

require_once 'classes/Usuario.php';
$id = $_POST['id'];
$email = $_POST['nome_usuario'];
$usuario = new Usuario();
$usuario->alterar($id, $email);

echo $id . " - " . $email;

header('Location:usuarios.php');

?>