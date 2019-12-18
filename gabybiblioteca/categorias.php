<?php
require_once 'classes/Categoria.php';

$categoria = new Categoria();
$lista = $categoria->listar();

require_once 'cabecalho.php';
?>

<button><a href = "menu.php">Voltar</a></button>
<br>

<h2>Descrição</h2>
<a href="categorias-criar.php" class= "btn btn-success"><img src = "icones/adicionarcategoria.png">   -   Insira uma descrição</img></a>
<br><br>
<select>
    <?php foreach($lista as $linha){ ?>
        <option value = "<?php echo $linha['id'];?>">
            <?php echo $linha['descricao'];?>
        </option>
    <?php } ?>
</select>


<table class= "table">
    <thead>
        <th>Id</th>
        <th>Descrição</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach($lista as $linha){ ?>
        <tr>
            <td><?php echo $linha['id'];?></td>
            <td><?php echo $linha['descricao'];?></td>
            <td>
                <a href="categorias-editar.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-info"><img src = "icones/editarcategoria.png">   -   Alterar</img></a>
                <a href="categorias-excluir.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-danger"><img src = "icones/removercategoria.png">   -   Excluir</img></a>
            </td>
        </tr>
        <?php } ?>
    <tbody>
</table>

<?php
require_once 'rodape.php';
?>