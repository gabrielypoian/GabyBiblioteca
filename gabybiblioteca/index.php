<?php require_once 'cabecalho-login.php' ?>

<h2 style = "text-align: center;">Seja bem-vindo ao Sistema Gabyteca!</h2>
<p style = "text-align: center;">Faça login ou cadastre-se para começar a usar a biblioteca.</p>
<br>

<div class="container" style = "border: 3px solid; text-align: center; height: 170px; width: 600px;">
<br>
<form method = "post" action = "validar-login.php">
    <label for="usuario"><b>Usuário:</b></label>
    <input type="text" placeholder="Digite o seu usuário" name="usuario" required>

    <label for="senha"><b>Senha:</b></label>
    <input type="password" placeholder="Digite sua senha" name="senha" required>
    <br>
    <br>
    <button type="submit">Login</button>
</form>
    <br>
    <br>
    <strong>
        <a href="usuarios-criar.php">Ainda não possui login? Então clique aqui para se cadastrar!</a>
    </strong>
</div>

<?php require_once 'rodape.php' ?>