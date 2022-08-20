<?php
session_start();
print_r($_SESSION);
?>

<p>
    <b>Nome: </b> <?= $_SESSION['nome'] ?>
    <b>Email: </b> <?= $_SESSION['email'] ?>
</p>

<?php
$_SESSION['email'] = 'gabrielfilho@emailaz.com.br';
?>

<p>
    <a href="/CURSO_PHP/exercicio.php?dir=sessao&file=basico_sessao">Voltar</a>
</p>

<p>
    <a href="/CURSO_PHP/exercicio.php?dir=sessao&file=basico_sessao_limpar">Limpar Sessão</a>
</p>