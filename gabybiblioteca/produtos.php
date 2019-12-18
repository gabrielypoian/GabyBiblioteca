<?php require_once 'cabecalho.php'; 
require_once 'classes/Produtos.php';
$produto = new Produtos();
$lista = $produto->listar();
?>

<button><a href = "menu.php">Voltar</a></button>
<br>

<h2>Produtos</h2>
<a href="produtos-criar.php" class="btn btn-info"><img src = "icones/adicionarproduto.png">   -   Crie um Novo Produto</img></a><br>

<table class="table"><br>
    <thead>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>Quantidade</th>
        <th>Categoria</th>
        <th>Descrição</th>
        <th class="acao">Editar</th>
        <th class="acao">Excluir</th>
    </tr>
    </thead>
    <tbody>
        <?php foreach($lista as $linha){ ?>
        <tr>
            <td><?php echo $linha['id'];?></td>
            <td><?php echo $linha['nome'];?></td>
            <td><?php echo $linha['preco'];?></td>
            <td><?php echo $linha['quantidade'];?></td>
            <td><?php echo $linha['categoria'];?></td>
            <td><?php echo $linha['descricao'];?></td>
            <td>
                <a href="produtos-editar.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-info"><img src = "icones/editarproduto.png">   -   Alterar</img></a></td>
                <td><a href="produtos-excluir.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-danger"><img src = "icones/removerproduto.png">   -   Excluir</img></a>
            </td>
        </tr>
        <?php } ?>
    <tbody>
</table>
<?php require_once 'rodape.php' ?>
