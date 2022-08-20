<?php
session_start();
session_destroy();
header("Location: /CURSO_PHP/exercicio.php?dir=sessao&file=basico_sessao");
?>