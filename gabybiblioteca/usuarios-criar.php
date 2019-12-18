<?php require_once 'cabecalho-login.php'; ?>

<button><a href = "usuarios.php">Voltar</a></button>
<br>


<h2>Criar novo usuário</h2><br>

<form name="novo-usuario" method="post" action="usuarios-criar-post.php">
    Nome do usuário:
    <input name="email" maxlength="10" required>
    <br><br>
    Senha do usuário:
    <input type="password" name="senha" maxlength="10" required>

    <br><br>

    <button type="submit">Salvar</button>
</form>
<?php require_once 'rodape.php' ; ?>
