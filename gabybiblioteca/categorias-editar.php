<?php
$id = $_GET['CODIGO'];

require_once 'cabecalho.php';
require_once 'classes/Categoria.php';

$categoria = new Categoria();
$linha = $categoria->listar1Categoria($id);
?>

<button><a href = "categorias.php">Voltar</a></button>
<br>

<h2>Alterar Categoria</h2>
<form name = "alterar-categoria" action = "categorias-editar-post.php" method = "post">
    <input type = "hidden" name = "id" value = "<?php echo $id;?>">
    Categoria:
    <input name = "nome_categoria" value = "<?php echo $linha['descricao'];?>">
    <button type = "submit">Salvar</button>
</form>
<?php
require_once 'rodape.php';
?>