<?php
require_once 'classes/Usuario.php';

$usuarios = new Usuario();

//$id = $_POST['id'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$usuarios->inserir($email, $senha);
//$senha->inserir($senha);

header('Location: index.php');

?>