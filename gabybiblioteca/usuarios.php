<?php
require_once 'classes/Usuario.php';

$usuario = new Usuario();

$lista = $usuario->listar();

require_once 'cabecalho.php';
?>

<button><a href = "menu.php">Voltar</a></button>
<br>

<h2>Usuário</h2>

<a href="usuarios-criar.php" class="btn btn-success"><img src = "icones/adicionarusuario.png">   -   Adicionar Usuários.</img></a>

<table class="table">
    <thead>
        <th>Id</th>
        <th>Usuários</th>
        <th>Senha</th>
    </thead>
    <tbody>
        <?php foreach($lista as $linha){ ?>
        <tr>
            <td><?php echo $linha['id'];?></td>
            <td><?php echo $linha['usuario'];?></td>
            <td><?php echo "*****";?></td>
            <td>
                <a href="usuarios-editar.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-info"><img src = "icones/editarusuario.png">   -   Alterar</img></a>
                <a href="usuarios-excluir.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-danger"><img src = "icones/removerusuario.png">  -  Excluir</img></a>
            </td>
        </tr>
        <?php } ?>
    <tbody>
</table>

<?php
require_once 'rodape.php';  
?>