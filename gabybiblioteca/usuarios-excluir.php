<?php

    $id_excluir = $_GET['CODIGO'];
    require_once 'classes/Usuario.php';

    $usuario = new Usuario();
    $usuario->excluir($id_excluir);

    header('Location:usuarios.php');
?>