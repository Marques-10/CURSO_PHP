<div class="titulo">Sessão</div>

<?php
session_start();

print_r($_SESSION);
echo '<br>';

if(!$_SESSION['nome']) {
    $_SESSION['nome'] = 'Gabriel';
}

if(!$_SESSION['email']) {
    $_SESSION['email'] = 'gabriel@azmail.com';
}

print_r($_SESSION);

?>

<p>
    <a href="/CURSO_PHP/exercicio.php?dir=sessao&file=basico_sessao_alterar">
        Alterar Sessão
    </a>
</p>