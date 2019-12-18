<?php require_once 'cabecalho.php' ?>

<button><a href = "produtos.php">Voltar</a></button>
<br>

<h2>Criar Novo Produto</h2><br>
<form action="produtos-criar-post.php" method="post">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                <label for="nome">Nome do livro:</label>
                <input name = "nome" type="text" class="form-control" placeholder="Nome do livro" required>
            </div>
            <div class="form-group">
            <label for="descricao_livro">Descrição do livro:</label>
                <input name = "descricao" type="text" class="form-control" placeholder="Descrição do livro" required>
            </div>
            <div class="form-group">
            <label for="categoria_livro">Categoria do livro:</label>
                <input name = "categoria_livro" type="text" class="form-control" placeholder="Categoria do livro" required>
            </div>
            <div class="form-group">
            <label for="quantidade">Quantidade de livros:</label>
                <input name = "quantidade" type="number"  min="0" class="form-control" placeholder="Quantidade do Produto" required>
            </div>
            <div class="form-group">
            <label for="preco">Preço do livro:</label>
                <input name = "preco" type="number" step="0.01" min="0" class="form-control" placeholder="Preço do Produto" required>
            </div>
            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
</form>

<?php require_once 'rodape.php' ?>
