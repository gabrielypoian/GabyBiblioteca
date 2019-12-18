<?php require_once 'cabecalho.php'; ?>

<button><a href = "categorias.php">Voltar</a></button>

<h2>Insira uma nova descrição:</h2>

<form name="nova-categoria" method="post" action="categorias-criar-post.php">
    <input name="nome_categoria" maxlength="30">
    <br><br>
    <button type="submit">Salvar</button>
</form>
<?php require_once 'rodape.php' ; ?>
