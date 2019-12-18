<?php
$id = $_GET['CODIGO'];

require_once 'cabecalho.php';
require_once 'classes/Usuario.php';

$usuario = new Usuario();
$linha = $usuario->listar1Usuario($id);
?>

<button><a href = "usuarios.php">Voltar</a></button>
<br>

<h2>Alterar Usuário</h2>

<form name = "alterar-usuario" action = "usuarios-editar-post.php" method = "post">
    <input type = "hidden" name = "id" value = "<?php echo $id;?>">
    Usuário:
    <input name = "nome_usuario" value = "<?php echo $linha['usuario'];?>">
    <button type = "submit">Salvar</button>
</form>
<?php
require_once 'rodape.php';
?>